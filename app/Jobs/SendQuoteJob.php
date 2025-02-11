<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Quote;
use App\Mail\QuoteMail;
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
        $nextQuoteDate = $this->user->nextQuoteDate();

        Mail::to($this->user->email)->send(new QuoteMail($this->quote, $this->user, $nextQuoteDate));
        UserQuote::create([
            'user_id' => $this->user->id,
            'quote_id' => $this->quote->id,
        ]);
    }
}
