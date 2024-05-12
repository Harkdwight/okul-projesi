<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Oem extends Model
{
    use HasFactory;

    protected $table = 'oems';
    
    protected $fillable = [
        'name', 'brand_id', 'price', 'img', 'stock'
    ];

    public function Brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
