<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Plan;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Models\CheckoutSession;
use Laravel\Cashier\Subscription;
use App\Models\SubscriptionCategory;

class SubscriptionController extends Controller
{
    public function showSubscriptionForm()
    {
        $plans = Plan::latest()->get();
        $categories = Category::latest()->get();
        return view("auth.subscription.subscription", compact("plans", "categories"));
    }


    public function subscribe(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $plan = Plan::findOrFail($request->plan_id);
        $userId = auth()->id();

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $plan->stripe_plan,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('subscription.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'metadata' => [
                'price_id' => $plan->stripe_plan,
                'categories' => json_encode($request->categories),
            ],
            'cancel_url' => route('subscription.cancel'),
        ]);

        CheckoutSession::create([
            'session_id' => $session->id,
            'user_id' => $userId,
            'plan_id' => $plan->id,
            'categories' => json_encode($request->categories),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect($session->url);
    }


    public function success(Request $request)
    {
        try {
            $sessionId = $request->session_id;

            $checkoutSession = CheckoutSession::where('session_id', $sessionId)->first();

            if (!$checkoutSession) {
                return response()->json(["success" => false, "msg" => "Session not found", "status" => 404], 404);
            }

            $user = User::findOrFail($checkoutSession->user_id);
            $plan = Plan::findOrFail($checkoutSession->plan_id);

            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $checkoutSessionDetails = $stripe->checkout->sessions->retrieve($sessionId, []);

            $subscriptionId = $checkoutSessionDetails->subscription;
            $stripePrice = number_format($checkoutSessionDetails->amount_total / 100, 2);

            $planType = $plan->slug === 'basic-plan' ? 'basic' : ($plan->slug === 'premium-plan' ? 'premium' : 'standard');
            $messagesPerWeek = $planType === 'basic' ? 1 : ($planType === 'premium' ? 7 : 3);

            $existingSubscription = Subscription::where('user_id', $user->id)->first();

            $duration = match ($plan->slug) {
                'basic-plan' => now()->addDay(),
                'standard-plan' => now()->addMonth(),
                default => now()->addYear(),
            };

            if ($existingSubscription) {
                $existingSubscription->update([
                    'stripe_status' => $checkoutSessionDetails->payment_status,
                    'stripe_price' => $stripePrice,
                    'trial_ends_at' => $duration,
                    'ends_at' => $duration,
                    'plan_type' => $planType,
                    'messages_per_week' => $messagesPerWeek,
                ]);
            } else {
                $existingSubscription = Subscription::create([
                    'user_id' => $user->id,
                    'type' => $checkoutSessionDetails->mode,
                    'stripe_id' => $subscriptionId,
                    'stripe_status' => $checkoutSessionDetails->payment_status,
                    'stripe_price' => $stripePrice,
                    'quantity' => 1,
                    'trial_ends_at' => $duration,
                    'ends_at' => $duration,
                    'plan_type' => $planType,
                    'messages_per_week' => $messagesPerWeek,
                ]);
            }

            // Store selected categories
            $categories = json_decode($checkoutSession->categories, true);
            if (!empty($categories)) {
                foreach ($categories as $categoryId) {
                    SubscriptionCategory::create([
                        'subscription_id' => $existingSubscription->id,
                        'category_id' => $categoryId,
                    ]);
                }
            }

            return redirect('/dashboard')->with('success', 'Subscription created or updated successfully!');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Something went wrong',
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'status' => 400,
            ], 400);
        }
    }
}
