<?php

namespace App\Http\Controllers\User;
use App\Models\Plan;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\UserPlanCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManageSubscriptionController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $plans = Plan::all();
        return view('auth.pages.customer.manage_subscriptions.index', compact('categories','plans'));
    }

    public function store(Request $request)
    {
        UserPlanCategory::create([
            'user_id' => Auth::id(),
            'plan_id' => $request->plan_id,
            'categories' => json_encode($request->categories),
        ]);

        // Redirect to payment form
        return response()->json([
            'success' => true,
            'redirect_url' => route('payment.form', [
                'plan_id' => $request->plan_id,
                'categories' => json_encode($request->categories)
            ]),
        ]);
    }
}
