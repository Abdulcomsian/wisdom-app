<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        $activeSubscription = $user->subscriptions()
            ->where('ends_at', '>', now())
            ->exists();
        if (!$activeSubscription) {
            session()->flash('message', 'Your subscription has ended. Please renew to continue.');
            return redirect()->route('payment.form');
        }

        return $next($request);
    }
}
