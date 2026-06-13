<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToThePointPackage extends Model
{
    protected $fillable = [
        'category',
        'badge_label',
        'title',
        'price',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
