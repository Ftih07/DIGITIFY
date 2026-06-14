<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageGames extends Model
{
    protected $guarded = ['id'];

    // Casting JSON ke Array otomatis agar gampang di-loop di Vue/React atau Filament Repeater
    protected $casts = [
        'features' => 'array',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
