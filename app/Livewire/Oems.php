<?php

namespace App\Livewire;

use Livewire\Component;

class Oems extends Component
{
    public $brands = ['MSI', 'ASUS', 'GIGABYTE'];
    public $maxPage;
    public $modelParts;
    public int $currentPage;
    /**
     * @var null
     */
    public $model;

    public function __construct()
    {
        $this->model = null;
        $this->currentPage = 1;
        $this->modelParts = [];
        $this->maxPage = 0;
    }

    protected $listeners = ['modelChange'];

    public function modelChange($value)
    {
        $this->model = $value['model'];
        $this->updateData();
    }

    public function changePage($next = true)
    {
        $next ? $this->currentPage++ : $this->currentPage--;
        $this->updateData();
    }

    public function updateData()
    {
        $page = $this->model::paginate('8', ['*'], 'page', $this->currentPage);
        $this->maxPage = $page->lastPage();
        $this->modelParts = $page->items();
    }
    
    public function render()
    {
        return view('livewire.oems');
    }
}
