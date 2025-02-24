<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();
        if (!$user) {
            $user = User::create(['name' => $googleUser->name,  'email' => $googleUser->email, 'email_verified_at' => now(), 'password' => Hash::make(rand(00000, 99999))]);
        }
        $user->assignRole('customer');

        Auth::login($user);

        $user = Auth::user();

        if ($user->hasRole('customer')) {
            if (!$user->subscription) {
                return redirect()->route('payment.form');
            }
            return redirect()->route('auth');
        }
    }
}
