<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutSession extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'checkout_sessions';

    protected $fillable = [
        'session_id',
        'user_id',
        'plan_id',
        'categories'
    ];
}
