<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'subtitle',
        'price',
        'is_start_from',
        'badge',
        'features',
        'excluded_features',
        'renewal_text',
        'sort_order'
    ];

    // Cast JSON ke Array biar gampang dibaca Filament
    protected $casts = [
        'features' => 'array',
        'excluded_features' => 'array',
        'is_start_from' => 'boolean',
    ];
}
