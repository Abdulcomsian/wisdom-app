<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Quote;
use App\Models\UserQuote;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use ClickSend\Configuration;
use ClickSend\Api\SMSApi;
use ClickSend\Model\SmsMessage;
use ClickSend\Model\SmsMessageCollection;
use GuzzleHttp\Client;
use Exception;

class SendQuoteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $quote;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user, Quote $quote)
    {
        $this->user = $user;
        $this->quote = $quote;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Construct the message
        $messageContent = '"' . $this->quote->quote . '"';

        // Get ClickSend credentials from .env
        $username = env('CLICKSEND_USERNAME');
        $apiKey = env('CLICKSEND_API_KEY');

        try {
            // Configure ClickSend API
            $config = Configuration::getDefaultConfiguration()
                ->setUsername($username)
                ->setPassword($apiKey);

            // Initialize API instance
            $apiInstance = new SMSApi(new Client(), $config);

            // Create SMS message
            $msg = new SmsMessage();
            $msg->setBody($messageContent);
            $msg->setTo($this->user->phone_no); // Ensure phone number is available
            $msg->setSource("laravel");

            // Create collection of SMS messages
            $smsMessages = new SmsMessageCollection();
            $smsMessages->setMessages([$msg]);

            // Send SMS
            $response = $apiInstance->smsSendPost($smsMessages);

            // Log response
            Log::info('SMS sent successfully', ['response' => $response]);

            // Store record in UserQuote table
            UserQuote::create([
                'user_id' => $this->user->id,
                'quote_id' => $this->quote->id,
            ]);

        } catch (Exception $e) {
            Log::error('Error sending SMS', ['error' => $e->getMessage()]);
        }
    }
}

