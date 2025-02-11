<?php

namespace App\Jobs;

use App\Models\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessQuoteRow implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $category_id;
    protected $quote;

    public function __construct($category_id, $quote)
    {
        $this->category_id = $category_id;
        $this->quote = $quote;
    }

    public function handle()
    {
        // Avoid duplicate entries
        $exists = Quote::where('category_id', $this->category_id)
            ->where('quote', $this->quote)
            ->exists();

        if (!$exists) {
            Quote::create([
                'category_id' => $this->category_id,
                'quote' => $this->quote,
            ]);
        }
    }
}

