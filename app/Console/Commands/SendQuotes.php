<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Quote;
use App\Jobs\SendQuoteJob;
use Illuminate\Console\Command;
use App\Models\SubscriptionCategory;
use Illuminate\Support\Facades\Log;

class SendQuotes extends Command
{
    protected $signature = 'send:quotes';
    protected $description = 'Send quotes based on user subscription plan';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $users = User::whereHas('subscription')->get(); // Get users with active subscriptions

        foreach ($users as $user) {
            $subscription = $user->subscription;
            if (!$subscription) {
                continue; // Skip if no active subscription
            }

            // Get the categories that the user has subscribed to
            $categoryIds = SubscriptionCategory::where('subscription_id', $subscription->id)->pluck('category_id');

            if ($categoryIds->isEmpty()) {
                $this->info("No categories selected for user: {$user->name}");
                continue;
            }

            // Check if the user already received a quote today
            $quoteSentToday = $user->sentQuotes()->whereDate('created_at', today())->exists();
            if ($quoteSentToday) {
                Log::info("Quote already sent today for user: {$user->id}, skipping.");
                continue; // Skip this user since they already got a quote today
            }

            // Select a quote based on the subscription type
            switch ($subscription->plan_type) {
                case 'basic':
                    // Send only if 7 days have passed since the last quote
                    $lastSentQuote = $user->sentQuotes()->latest()->first();
                    if (!$lastSentQuote || $lastSentQuote->created_at->diffInDays(now()) >= 7) {
                        $this->selectAndQueueQuote($user, $categoryIds);
                    }
                    break;

                case 'standard':
                    // Send a quote only on Monday, Wednesday, Friday
                    $scheduledDays = [1, 3, 5]; // Monday (1), Wednesday (3), Friday (5)
                    if (in_array(now()->dayOfWeek, $scheduledDays)) {
                        $this->selectAndQueueQuote($user, $categoryIds);
                    }
                    break;

                case 'premium':
                    // Send a quote daily
                    $this->selectAndQueueQuote($user, $categoryIds);
                    break;
            }
        }

        $this->info('Quotes queued successfully!');
    }

    /**
     * Select a random quote and queue it for sending.
     */
    private function selectAndQueueQuote(User $user, $categoryIds)
    {
        $quote = Quote::whereIn('category_id', $categoryIds)
            ->whereNotIn('id', $user->sentQuotes()->pluck('quote_id'))
            ->inRandomOrder()
            ->first();

        if ($quote) {
            $this->queueQuoteForSending($user, $quote);
        } else {
            Log::info("No available quotes for user: {$user->id}");
        }
    }

    /**
     * Queue the quote for sending within the allowed time range.
     */
    private function queueQuoteForSending(User $user, Quote $quote)
    {
        Log::info('Dispatching quote job for user: ' . $user->id . ' with quote: ' . $quote->id);

        SendQuoteJob::dispatch($user, $quote)->delay(now()->addMinutes(rand(1, 30))); // Random delay to distribute emails
    }
}
