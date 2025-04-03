<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Http;

class FrontentController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $plans = Plan::all();
        $testimonials = Testimonial::all();

        return view('welcome', compact('categories', 'plans','testimonials'));
    }
}
