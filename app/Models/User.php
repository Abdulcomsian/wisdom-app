<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Subscription;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'phone_no',
        'email',
        'password',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function images(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'image');
    }

    public function imageUrl(): string
    {
        if ($this->images != null) {
            return $this->imagePath($this->images->url);
        }

        return '';
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class)->where('stripe_status', 'active');
    }

    public function sentQuotes()
    {
        return $this->hasMany(UserQuote::class);
    }

    public function nextQuoteDate()
    {
        $subscription = $this->subscription; // Get the active subscription
        if ($subscription && $subscription->plan_type) {
            switch ($subscription->plan_type) {
                case 'basic':
                    return now()->addWeek()->format('l, jS F Y');
                case 'standard':
                    return now()->addDays(2)->format('l, jS F Y');
                case 'premium':
                    return now()->addDay()->format('l, jS F Y');
            }
        }

        return 'No next quote scheduled';
    }
}
