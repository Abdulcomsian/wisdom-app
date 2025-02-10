<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quote;
    public $user;
    public $nextQuoteDate;

    public function __construct($quote, $user, $nextQuoteDate)
    {
        $this->quote = $quote;
        $this->user = $user;
        $this->nextQuoteDate = $nextQuoteDate;
    }

    public function build()
    {
        Log::info('Building quote email for user: ' . $this->user->id . ' with quote: ' . $this->quote->id);

        return $this->subject('Your Scheduled Quote')
                    ->view('emails.quote');
    }
}
