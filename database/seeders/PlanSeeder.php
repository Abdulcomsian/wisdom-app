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
                'stripe_plan' => 'price_1QfFtu2LGzU3iHWpvqiJfijs', // Replace with actual Stripe plan ID
                'price' => 15, // Example daily price
            ],
            [
                'name' => 'Standard Plan',
                'slug' => 'standard-plan',
                'stripe_plan' => 'price_1QfFuM2LGzU3iHWp5pbvPMlJ', // Replace with actual Stripe plan ID
                'price' => 150, // Example monthly price
            ],
            [
                'name' => 'Premium Plan',
                'slug' => 'premium-plan',
                'stripe_plan' => 'price_1QfFum2LGzU3iHWpmolZ2Axf', // Replace with actual Stripe plan ID
                'price' => 200, // Example yearly price
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
