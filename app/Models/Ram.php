<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'img', 'price', 'stock', 'brand_id'
    ];
    public $depends = [Motherboard::class => ['ddr']];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
