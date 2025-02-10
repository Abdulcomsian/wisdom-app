<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class TrialWillEndNotification extends Notification
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $user;

    /**
     * Create a new message instance.
     *
     * @param $user The user model instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Trial Period is Ending Soon')
            ->view('emails.trial_will_end');
    }
}
