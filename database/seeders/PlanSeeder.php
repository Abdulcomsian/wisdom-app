<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic Plan',
                'slug' => 'basic-plan',
                'stripe_plan' => 'price_1QwL9Z2LGzU3iHWp1Y69t6pU', // Replace with actual Stripe plan ID
                'price' => 1.99, // Example daily price
            ],
            [
                'name' => 'Standard Plan',
                'slug' => 'standard-plan',
                'stripe_plan' => 'price_1QwLAq2LGzU3iHWpSsrNOEM7', // Replace with actual Stripe plan ID
                'price' => 2.99, // Example monthly price
            ],
            [
                'name' => 'Premium Plan',
                'slug' => 'premium-plan',
                'stripe_plan' => 'price_1QwLBb2LGzU3iHWpQmLZLqdB', // Replace with actual Stripe plan ID
                'price' => 4.99, // Example yearly price
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
