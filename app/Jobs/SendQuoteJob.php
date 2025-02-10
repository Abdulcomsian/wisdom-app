<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Quote;
use App\Mail\QuoteMail;
use App\Models\Category;
use App\Models\UserQuote;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class SendQuoteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $quote;

    public function __construct(User $user, Quote $quote)
    {
        $this->user = $user;
        $this->quote = $quote;
    }

    public function handle()
    {
        // Logic for sending the quote via email
        $nextQuoteDate = $this->user->nextQuoteDate(); // Determine next quote schedule

        Mail::to($this->user->email)->send(new QuoteMail($this->quote, $this->user, $nextQuoteDate));
        // Store sent quote in the database
        UserQuote::create([
            'user_id' => $this->user->id,
            // 'category_id' => $this->quote->category_id,
            'quote_id' => $this->quote->id,
        ]);
    }
}
