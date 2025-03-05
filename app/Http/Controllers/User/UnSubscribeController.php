<?php

namespace App\Http\Controllers\User;

use Exception;
use Laravel\Cashier\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UnSubscribeController extends Controller
{
    public function index()
    {
        return view('auth.pages.customer.unsubscribe.index');
    }

    public function destroy()
    {
        try {
            $user = Auth::id();
            $subscription = Subscription::where('user_id', $user)->first();

            if (!$subscription) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'No active subscription found.'
                ], 404);
            }

            $subscription->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'You have successfully unsubscribed.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }
}
