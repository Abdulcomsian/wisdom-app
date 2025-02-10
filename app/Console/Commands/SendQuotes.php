<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Quote;
use App\Mail\QuoteMail;
use App\Models\UserQuote;
use Illuminate\Console\Command;
use App\Models\SubscriptionCategory;
use Illuminate\Support\Facades\Mail;

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
            $subscription = $user->subscription; // Get the user's subscription

            if (!$subscription) {
                continue; // Skip if no active subscription
            }

            // Get the categories that the user has subscribed to
            $categoryIds = SubscriptionCategory::where('subscription_id', $subscription->id)->pluck('category_id');

            if ($categoryIds->isEmpty()) {
                $this->info("No categories selected for user: {$user->name}");
                continue;
            }

            // Exclude already sent quotes
            $sentQuoteIds = $user->sentQuotes()->pluck('quote_id')->toArray();

            // Fetch quotes only from the selected categories
            $quotes = Quote::whereIn('category_id', $categoryIds)
                ->whereNotIn('id', $sentQuoteIds)
                ->inRandomOrder()
                ->get();

            if ($quotes->isEmpty()) {
                $this->info("No new quotes available for user: {$user->name}");
                continue;
            }

            // Send quotes based on subscription plan
            switch ($subscription->plan_type) {
                case 'basic':
                    $quote = $quotes->first();
                    $this->sendQuote($user, $quote);
                    $this->storeSentQuote($user, $quote);
                    break;

                case 'standard':
                    foreach ($quotes->take(3) as $quote) {
                        $this->sendQuote($user, $quote);
                        $this->storeSentQuote($user, $quote);
                    }
                    break;

                case 'premium':
                    $quote = $quotes->first();
                    $this->sendQuote($user, $quote);
                    $this->storeSentQuote($user, $quote);
                    break;
            }
        }

        $this->info('Quotes sent successfully!');
    }

    /**
     * Store sent quote in the database
     */
    private function storeSentQuote(User $user, Quote $quote)
    {
        UserQuote::create([
            'user_id' => $user->id,
            'quote_id' => $quote->id,
        ]);
    }

    private function sendQuote($user, $quote)
    {
        if (!$quote) {
            return;
        }

        $nextQuoteDate = $user->nextQuoteDate(); // Determine next quote schedule

        Mail::to($user->email)->send(new QuoteMail($quote, $user, $nextQuoteDate));
    }
}
