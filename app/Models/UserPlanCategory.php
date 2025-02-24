<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlanCategory extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'user_plan_categories';

    protected $fillable = [
        'user_id',
        'plan_id',
        'categories'
    ];
}
