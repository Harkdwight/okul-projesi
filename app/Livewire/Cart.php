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

class Cart extends Component
{

    protected $listeners = ['itemSelect'];

    public function __construct()
    {
        $this->data = [
            Processor::class => null,
            Motherboard::class => null,
            GraphicCard::class => null,
            Ram::class => null,
            Psu::class => null,
            Hdd::class => null,
            Ssd::class => null,
            Tower::class => null,
            Cooler::class => null,
        ];
        $this->setBasketData();
        $this->price = $this->calculatePrice();
    }

    public function itemSelect($data)
    {
        $this->data[$data['model']] = $data['item'];
    }

    public function calculatePrice()
    {
        $total = 0;
        foreach ($this->data as $data) {
            if (isset($data['price'])) {
                $total += $data['price'];
            }
        }
        return $total;
    }

    public function setBasketData()
    {
        $basket = auth()->user()->userBasket()->get();
        foreach ($basket as $part) {
            $part = $part->oemPart;
            $this->data[$part::class] = $part;
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
