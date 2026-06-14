<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    // Accessor opsional untuk menampilkan format harga otomatis di UI
    public function getFormattedPriceAttribute()
    {
        if ($this->price_max) {
            return 'Rp '.number_format($this->price, 0, ',', '.').' - '.number_format($this->price_max, 0, ',', '.');
        }

        return 'Rp '.number_format($this->price, 0, ',', '.');
    }
}
