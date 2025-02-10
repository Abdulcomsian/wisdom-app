<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = ['category_id','quote'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }
}
