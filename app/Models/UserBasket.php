<?php

namespace App\Models;

use App\Livewire\PartSelector;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use const App\Livewire\PARTS;

class UserBasket extends Model
{

    protected $table = 'user_baskets';
    protected $fillable = ['user_id', 'model', 'oem_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function oemPart()
    {
        return $this->belongsTo($this->getAttribute('model'), 'oem_id', 'id');
    }

    public static function getChilds($model)
    {
        $index = PartSelector::findPartIndex($model);
        $children = [];
        foreach (PARTS as $key => $part) {
            if ($key <= $index) {
                continue;
            }
            $children = UserBasket::whereUserId(auth()->id())->where('model', $part['model'])->get();
        }

        return $children;
    }
}
