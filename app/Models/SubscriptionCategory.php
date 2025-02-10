<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionCategory extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'subscription_categories';

    protected $fillable = [
        'subscription_id',
        'category_id'
    ];
}
