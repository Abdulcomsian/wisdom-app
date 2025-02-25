<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Cashier\Subscription;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TrialWillEndNotification;

class StripeWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $event = json_decode($payload, true);

        // Validate the event payload
        if (json_last_error() !== JSON_ERROR_NONE || !isset($event['type'])) {
            Log::error('Invalid webhook payload: ' . $payload);
            return response()->json(['status' => 'invalid payload'], 400);
        }

        $eventType = $event['type'];
        Log::info('Webhook event received: ' . $eventType);

        switch ($eventType) {
            case 'charge.succeeded':
                $this->handleChargeSucceeded($event);
                break;

            case 'payment_intent.succeeded':
                $this->handlePaymentIntentSucceeded($event);
                break;

            case 'payment_intent.created':
                $this->handlePaymentIntentCreated($event);
                break;

            case 'charge.updated':
                $this->handleChargeUpdated($event);
                break;

            case 'invoice.payment_succeeded':
                $this->handleInvoicePaymentSucceeded($event);
                break;

            case 'invoice.payment_failed':
                $this->handleInvoicePaymentFailed($event);
                break;

            case 'customer.subscription.trial_will_end':
                $this->handleTrialWillEnd($event);
                break;

            default:
                Log::info('Received unknown event type: ' . $eventType);
                return response()->json(['status' => 'success'], 200);
        }

        return response()->json(['status' => 'success'], 200);
    }

    protected function handleChargeSucceeded($payload)
    {
        $charge = $payload['data']['object'];
        $paymentIntentId = $charge['payment_intent'];

        // Log the charge details
        Log::info('Charge succeeded: ' . json_encode($charge));

        // Example: Update the payment status for the corresponding order or subscription
        // You can use $charge['metadata'] to retrieve custom data (e.g., order ID)
    }

    protected function handlePaymentIntentSucceeded($payload)
    {
        $paymentIntent = $payload['data']['object'];

        // Log the payment intent details
        Log::info('Payment intent succeeded: ' . json_encode($paymentIntent));

        // Example: Update the payment status for the corresponding order or subscription
        // You can use $paymentIntent['metadata'] to retrieve custom data (e.g., order ID)
    }

    protected function handlePaymentIntentCreated($payload)
    {
        $paymentIntent = $payload['data']['object'];

        // Log the payment intent details
        Log::info('Payment intent created: ' . json_encode($paymentIntent));

        // Example: Store the payment intent ID in your database for future reference
    }

    protected function handleChargeUpdated($payload)
    {
        $charge = $payload['data']['object'];

        // Log the charge details
        Log::info('Charge updated: ' . json_encode($charge));

        // Example: Update the charge status in your database
    }

    protected function handleInvoicePaymentSucceeded($payload)
    {
        $invoice = $payload['data']['object'];
        $subscriptionId = $invoice['subscription'];

        // Log the invoice details
        Log::info('Invoice payment succeeded: ' . json_encode($invoice));

        $subscription = Subscription::where('stripe_id', $subscriptionId)->first();

        if (!$subscription) {
            Log::error('Subscription not found for stripe_id: ' . $subscriptionId);
            return;
        }

        $planId = $subscription->plan_id;
        $plan = Plan::find($planId);

        if (!$plan) {
            Log::error('Plan not found for plan_id: ' . $planId);
            return;
        }

        // Update subscription end date based on the plan
        if ($plan->slug == 'monthly-plan') {
            $endsAt = now()->addMonth();
        } else {
            $endsAt = now()->addYear();
        }

        $subscription->stripe_status = 'paid';
        $subscription->ends_at = $endsAt;
        $subscription->save();

        Log::info('Subscription updated: ' . $subscriptionId);
    }

    protected function handleInvoicePaymentFailed($payload)
    {
        $invoice = $payload['data']['object'];
        $subscriptionId = $invoice['subscription'];

        // Log the invoice details
        Log::info('Invoice payment failed: ' . json_encode($invoice));

        $subscription = Subscription::where('stripe_id', $subscriptionId)->first();

        if ($subscription) {
            $subscription->stripe_status = 'past_due';
            $subscription->save();
        }

        Log::info('Subscription marked as past due: ' . $subscriptionId);
    }

    protected function handleTrialWillEnd($payload)
    {
        $subscription = $payload['data']['object'];
        $subscriptionId = $subscription['id'];

        // Log the subscription details
        Log::info('Trial will end for subscription: ' . json_encode($subscription));

        $subscription = Subscription::where('stripe_id', $subscriptionId)->first();
        $user = User::findOrFail($subscription->user_id);

        if ($user) {
            try {
                Mail::to($user->email)->send(new TrialWillEndNotification($user));
                Log::info('Trial will end email sent to user: ' . $user->id);
            } catch (\Exception $e) {
                Log::error('Failed to send trial end notification email: ' . $e->getMessage());
            }
        }
    }
}
