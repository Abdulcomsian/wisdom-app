<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Plan;
use Stripe\Customer;
use Illuminate\Http\Request;
use Stripe\PaymentMethod;
use App\Models\UserPlanCategory;
use Laravel\Cashier\Subscription;
use App\Models\SubscriptionCategory;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function showSubscriptionForm()
    {
        $user = Auth::user();

        $userPlanCategory = UserPlanCategory::where('user_id', $user->id)->first();

        if (!$userPlanCategory) {
            return redirect()->route('auth')->with('error', 'No plan or categories selected.');
        }

        $categories = json_decode($userPlanCategory->categories);

        $plan = Plan::find($userPlanCategory->plan_id);

        return view('auth.subscription.subscription', [
            'user' => $user,
            'plan' => $plan,
            'categories' => $categories,
        ]);
    }

    public function subscribe(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $user = auth()->user();
        $plan = Plan::findOrFail($request->plan_id);

        if (!$user->stripe_customer_id) {
            $customer = Customer::create([
                'email' => $user->email,
                'name' => $user->first_name . ' ' . $user->last_name,
            ]);

            $user->stripe_customer_id = $customer->id;
            $user->save();
        } else {
            $customer = Customer::retrieve($user->stripe_customer_id);
        }

        $paymentMethod = PaymentMethod::retrieve($request->payment_method_id);
        $paymentMethod->attach(['customer' => $customer->id]);

        Customer::update($customer->id, [
            'invoice_settings' => ['default_payment_method' => $paymentMethod->id],
        ]);

        try {
            $subscription = \Stripe\Subscription::create([
                'customer' => $customer->id,
                'items' => [[
                    'price' => $plan->stripe_plan,
                ]],
                'default_payment_method' => $paymentMethod->id,
                'expand' => ['latest_invoice.payment_intent'],
            ]);

            if ($subscription->latest_invoice->payment_intent->status === 'requires_action') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $subscription->latest_invoice->payment_intent->client_secret,
                ]);
            }

            return response()->json([
                'success' => true,
                'subscription_id' => $subscription->id,
                'status' => $subscription->status,
                'clientSecret' => $subscription->latest_invoice->payment_intent->client_secret ?? null,
                'redirect_url' => route('subscription.success', ['subscription_id' => $subscription->id]),
            ]);
        } catch (\Stripe\Exception\CardException $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 400);
        }
    }


    public function success(Request $request)
    {
        try {
            $subscriptionId = $request->subscription_id;

            if (!$subscriptionId) {
                return redirect()->route('welcome')->with('error', 'Subscription ID missing.');
            }

            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $subscription = $stripe->subscriptions->retrieve($subscriptionId, ['expand' => ['latest_invoice.payment_intent']]);

            if ($subscription->latest_invoice->payment_intent->status !== 'succeeded') {
                return redirect()->route('welcome')->with('error', 'Payment not completed.');
            }

            $user = auth()->user();
            $plan = Plan::where('stripe_plan', $subscription->items->data[0]->price->id)->first();

            if (!$plan) {
                return redirect()->route('welcome')->with('error', 'Plan not found.');
            }

            $planType = match ($plan->slug) {
                'basic-plan' => 'basic',
                'premium-plan' => 'premium',
                default => 'standard',
            };

            $messagesPerWeek = match ($plan->slug) {
                'basic-plan' => 1,
                'premium-plan' => 7,
                default => 3,
            };

            $existingSubscription = Subscription::where('user_id', $user->id)->first();

            if ($existingSubscription) {
                $existingSubscription->update([
                    'stripe_status' => $subscription->status,
                    'stripe_price' => $subscription->items->data[0]->price->unit_amount / 100,
                    'trial_ends_at' => now()->addMonth(),
                    'ends_at' => now()->addMonth(),
                    'plan_type' => $planType,
                    'messages_per_week' => $messagesPerWeek,
                ]);
                $subscriptionRecord = $existingSubscription;
            } else {
                $subscriptionRecord = Subscription::create([
                    'user_id' => $user->id,
                    'type' => $subscription->items->data[0]->price->type,
                    'stripe_id' => $subscription->id,
                    'stripe_status' => $subscription->status,
                    'stripe_price' => $subscription->items->data[0]->price->unit_amount / 100,
                    'quantity' => 1,
                    'trial_ends_at' => now()->addMonth(),
                    'ends_at' => now()->addMonth(),
                    'plan_type' => $planType,
                    'messages_per_week' => $messagesPerWeek,
                ]);
            }

            $userPlanCategory = UserPlanCategory::where('user_id', $user->id)->first();
            $categories = $userPlanCategory ? json_decode($userPlanCategory->categories, true) : [];

            // Save categories in SubscriptionCategory
            if (!empty($categories)) {
                foreach ($categories as $categoryId) {
                    SubscriptionCategory::create([
                        'subscription_id' => $subscriptionRecord->id,
                        'category_id' => $categoryId,
                    ]);
                }
            }

            return redirect()->route('auth')->with('success', 'Subscription successful!');
        } catch (\Exception $e) {
            return redirect()->route('welcome')->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
