<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public function __construct()
    {
        $this->count = auth()->user()->name;
    }

//    public $count = 1;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
