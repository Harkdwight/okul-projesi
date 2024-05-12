<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomeController extends Component
{
    public mixed $username;
    protected $listeners = ['modelChange'];
    private mixed $model;

    public function __construct()
    {
        $this->username = auth()->user()->name;
        $this->model = null;
        $this->modelParts = [];
    }

    public function modelChange($value)
    {
        $this->model = $value['model'];
    }

    public function render()
    {
        return view('livewire.home');
    }
}
