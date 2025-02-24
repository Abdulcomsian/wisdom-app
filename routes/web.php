<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared";
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [FrontentController::class, 'home'])->name('welcome');

Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('redirect.google');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Auth::routes(['verify' => true, 'login' => false, 'register' => false]);

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/user/signin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/user/signin', [LoginController::class, 'login']);

Route::get('/user/signup', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/user/signup', [RegisterController::class, 'register']);

Route::group(
    ['prefix' => "/dashboard/", "middleware" => ["auth", 'verified']],
    function () {
        Route::get('/subscribe', [SubscriptionController::class, 'showSubscriptionForm'])->name('payment.form');
        Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
        Route::get('subscription/success', [SubscriptionController::class, 'success'])->name('subscription.success');
        Route::get('subscription/cancel', [SubscriptionController::class, 'cancel'])->name('subscription.cancel');

        Route::get('', [HomeController::class, 'index'])->name('auth');

        Route::get('/subscribed', function () {
            return view('subscribed');
        })->name('subscribed');

        Route::get('my-profile', [UserController::class, 'editprofile'])->name('myprofile');
        Route::put('edit-my-profile', [UserController::class, 'updatemyprofile'])->name('updatemyprofile');

        // change password
        Route::get('/settings', [HomeController::class, 'changePassword'])->name('change_password');
        Route::post('/change-password/update', [HomeController::class, 'updatePassword'])->name('update_password');

        Route::group(
            ["middleware" => "role:admin", "isAdmin"],
            function () {
                Route::resource('users', UserController::class);
                Route::prefix('categories')->name('categories.')->controller(CategoryController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('store', 'store')->name('store');
                    Route::get('show/{id}', 'show')->name('show');
                    Route::put('update/{id}', 'update')->name('update');
                    Route::post('update/source', 'updateSource')->name('update.source');
                    Route::delete('destroy/{id}', 'destroy')->name('destroy');
                });
                Route::prefix('quotes')->name('quotes.')->controller(QuoteController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('create', 'create')->name('create');
                    Route::post('store/custom/{id}', 'storeCustomQuote')->name('store.custom');
                    Route::post('store/ai/{id}', 'storeAiQuote')->name('store.ai');
                    Route::get('show/{id}', 'show')->name('show');
                    Route::get('edit/{id}', 'edit')->name('edit');
                    Route::put('update/{id}', 'update')->name('update');
                    Route::delete('destroy/{id}', 'destroy')->name('destroy');
                });
            }
        );
    }
);
