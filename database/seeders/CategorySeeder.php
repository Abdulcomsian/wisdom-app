<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology'],
            ['name' => 'Health', 'slug' => 'health'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Finance', 'slug' => 'finance'],
            ['name' => 'Sports', 'slug' => 'sports'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'id' => Str::uuid(), // Generate a UUID
                'name' => $category['name'],
                'slug' => $category['slug'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
