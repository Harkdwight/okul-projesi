<?php

namespace App\Livewire;

use App\Models\Cooler;
use App\Models\GraphicCard;
use App\Models\Hdd;
use App\Models\Motherboard;
use App\Models\Processor;
use App\Models\Psu;
use App\Models\Ram;
use App\Models\Ssd;
use App\Models\Tower;
use Livewire\Component;

const PARTS = [
    ['icon' => 'images/cpu.png', 'name' => 'processor', 'model' => Processor::class, 'selected' => true, 'label' => 'İşlemci'],
    ['icon' => 'images/motherboard.png', 'name' => 'motherboard', 'model' => Motherboard::class, 'selected' => false, 'label' => 'Anakart'],
    ['icon' => 'images/graphiccard.png', 'name' => 'graphic_card', 'model' => GraphicCard::class, 'selected' => false, 'label' => 'Ekran Kartı'],
    ['icon' => 'images/ram.png', 'name' => 'ram', 'model' => Ram::class, 'selected' => false, 'label' => 'Ram'],
    ['icon' => 'images/psu.png', 'name' => 'powersuply', 'model' => Psu::class, 'selected' => false, 'label' => 'Güç Kaynağı'],
    ['icon' => 'images/hdd.png', 'name' => 'hdd', 'model' => Hdd::class, 'selected' => false, 'label' => 'HDD'],
    ['icon' => 'images/ssd.png', 'name' => 'ssd', 'model' => Ssd::class, 'selected' => false, 'label' => 'SSD'],
    ['icon' => 'images/cooler.png', 'name' => 'cooler', 'model' => Cooler::class, 'selected' => false, 'label' => 'Sıvı Soğutucu'],
    ['icon' => 'images/tower.png', 'name' => 'tower', 'model' => Tower::class, 'selected' => false, 'label' => 'Kasa'],
];

class PartSelector extends Component
{
    public $parts = PARTS;

    public static function findPartIndex($model)
    {
        return array_search($model, array_column(PARTS, 'model'));
    }

    public function makeSelected($name)
    {
        $this->parts = array_map(function ($p) use ($name) {
            $p['selected'] = $p['name'] === $name ? true : false;
            return $p;
        }, $this->parts);

        $part = collect($this->parts)->where('name', $name)->first();
        $this->dispatch('modelChange', $part);
    }

    public function render()
    {
        return view('livewire.part-selector');
    }
}
