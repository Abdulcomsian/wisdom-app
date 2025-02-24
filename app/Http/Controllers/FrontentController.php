<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plan;

class FrontentController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $plans = Plan::all();
        return view('welcome', compact('categories','plans'));
    }
}
