<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $guarded = ['id'];

    public function categories(): HasMany
    {
        return $this->hasMany(ServiceCategory::class)->orderBy('sort_order');
    }

    public function packages(): HasMany
    {
        return $this->hasMany(PackageGames::class);
    }
}
