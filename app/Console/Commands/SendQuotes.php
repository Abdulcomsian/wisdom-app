<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Quote;
use App\Models\Category;
use App\Jobs\SendQuoteJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\SubscriptionCategory;
use OpenAI;

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
                Log::info("No categories selected for user: {$user->id}");
                continue;
            }

            // Select and queue a quote based on the subscription type
            switch ($subscription->plan_type) {
                case 'basic':
                    // Send only if 7 days have passed since the last quote
                    $lastSentQuote = $user->sentQuotes()->latest()->first();
                    if (!$lastSentQuote || $lastSentQuote->created_at->diffInDays(now()) >= 7) {
                        $this->selectAndQueueQuote($user, $categoryIds);
                    } else {
                        Log::info("Skipping user: {$user->id} (Basic Plan) - Last quote sent: {$lastSentQuote->created_at}");
                    }
                    break;

                case 'standard':
                    // Send a quote only on Monday, Wednesday, Friday
                    $scheduledDays = [1, 3, 5]; // Monday (1), Wednesday (3), Friday (5)
                    if (in_array(now()->dayOfWeek, $scheduledDays)) {
                        $this->selectAndQueueQuote($user, $categoryIds);
                    } else {
                        Log::info("Skipping user: {$user->id} (Standard Plan) - Not a scheduled day");
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
        foreach ($categoryIds as $categoryId) {
            $category = Category::find($categoryId);

            if (!$category) {
                Log::warning("Category not found for ID: {$categoryId}");
                continue;
            }

            // Get all previously sent quote IDs
            $previouslySentQuoteIds = $user->sentQuotes()->pluck('quote_id')->toArray();

            // Get quotes based on category source
            switch ($category->source) {
                case 'custom':
                    $quote = Quote::where('category_id', $category->id)
                        ->whereNotIn('id', $previouslySentQuoteIds) // Ensure unique quote
                        ->inRandomOrder()
                        ->first();
                    break;

                case 'ai':
                    $quote = $this->generateAiQuote($category);

                    // Ensure AI-generated quote is unique before saving
                    if ($quote && !in_array($quote->id, $previouslySentQuoteIds)) {
                        $quote->save(); // Save AI quote only if it's unique
                    } else {
                        Log::info("Skipping AI quote for user: {$user->id}, already received before.");
                        $quote = null;
                    }
                    break;

                case 'both':
                    // Try custom first
                    $quote = Quote::where('category_id', $category->id)
                        ->whereNotIn('id', $previouslySentQuoteIds)
                        ->inRandomOrder()
                        ->first();

                    // If no custom quote found, generate AI
                    if (!$quote) {
                        $quote = $this->generateAiQuote($category);
                    }

                    // Ensure AI quote is unique
                    if ($quote && !in_array($quote->id, $previouslySentQuoteIds)) {
                        $quote->save();
                    } else {
                        Log::info("Skipping duplicate AI quote for user: {$user->id}");
                        $quote = null;
                    }
                    break;
            }

            if ($quote) {
                $this->queueQuoteForSending($user, $quote);
            } else {
                Log::warning("No available unique quotes for user: {$user->id} in category: {$category->id}");
            }
        }
    }


    private function generateAiQuote(Category $category)
    {
        $apiKey = env('OPENAI_API_KEY');

        try {
            $client = OpenAI::client($apiKey);

            $response = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a quote generator. Generate an inspirational quote.'],
                    ['role' => 'user', 'content' => "Generate an inspirational quote for the category: {$category->name}."]
                ],
                'max_tokens' => 50,
            ]);

            if (!isset($response['choices'][0]['message']['content'])) {
                Log::error('AI Quote generation failed: No content received.');
                return null;
            }

            $quoteText = trim($response['choices'][0]['message']['content']);
            Log::info('ChatGPT Generated Quote: ' . $quoteText);

            return new Quote([
                'category_id' => $category->id,
                'quote' => $quoteText
            ]);
        } catch (\Exception $e) {
            Log::error('OpenAI API Error: ' . $e->getMessage());
        }

        return null;
    }

    /**
     * Queue the quote for sending within the allowed time range.
     */
    private function queueQuoteForSending(User $user, Quote $quote)
    {
        Log::info('Dispatching quote job for user: ' . $user->id . ' with quote: ' . $quote->id . ' of Category: ' . $quote->category_id);

        // SendQuoteJob::dispatch($user, $quote)->delay(now()->addMinutes(rand(1, 3))); // Random delay to distribute emails
        (new SendQuoteJob($user, $quote))->handle();
    }
}
