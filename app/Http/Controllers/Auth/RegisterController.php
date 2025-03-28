<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserPlanCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'country_code' => ['required', 'string', 'max:5'], // Validate country code
            'phone_no' => 'required|string|min:10|max:15|regex:/^\+?[0-9\s\-\(\)]*$/',
            'password' => 'required|string|min:8|confirmed',
            'plan_id' => 'required|exists:plans,id',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            // 'country_code' => $request->country_code,
            'country_code' => '+1',
            'phone_no' => $request->phone_no, // Save concatenated number
            'password' => Hash::make($request->password),
        ]);

        // Assign role and save subscription
        $user->assignRole('customer');

        Auth::login($user);

        event(new Registered($user));

        UserPlanCategory::create([
            'user_id' => $user->id,
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
