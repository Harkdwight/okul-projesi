<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OemType extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'priority',
    ];

    public function oem(): HasMany
    {
        return $this->hasMany(Oem::class);
    }
}
