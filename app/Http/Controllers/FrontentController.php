<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class FrontentController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $plans = Plan::all();

        return view('welcome', compact('categories', 'plans'));
    }
}
