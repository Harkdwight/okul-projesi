<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $fillable = [
        'name', 'logo'
    ];

    public function oems(): HasMany
    {
        return $this->hasMany(Oem::class);
    }


}
