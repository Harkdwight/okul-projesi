<?php

namespace App\Livewire;

use App\Models\Motherboard;
use App\Models\Processor;
use Livewire\Component;

class PartSelector extends Component
{
    public $parts = [
        ['icon' => 'images/icons/motherboard.svg', 'name' => 'motherboard', 'model' => Motherboard::class, 'selected' => false],
        ['icon' => 'images/icons/processor.svg', 'name' => 'processor', 'model' => Processor::class, 'selected' => false],
    ];

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
