<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Motherboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'img', 'price', 'stock', 'brand_id'
    ];
    public $depends = [Processor::class => ['socket']];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
