<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
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
        return $this->subject('Your Scheduled Quote')
                    ->view('emails.quote');
    }
}
