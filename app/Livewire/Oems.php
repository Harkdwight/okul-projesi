<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class Oems extends Component
{
    public $brands;
    public $maxPage;
    public $modelParts;
    public int $currentPage;
    /**
     * @var null
     */
    public $model;
    /**
     * @var null
     */
    public mixed $brandFilter;

    public function __construct()
    {
        $this->model = null;
        $this->currentPage = 1;
        $this->modelParts = [];
        $this->maxPage = 0;
        $this->brands = [];
        $this->brandFilter = null;
    }

    protected $listeners = ['modelChange'];

    public function modelChange($value)
    {
        $this->model = $value['model'];
        $this->changeBrands();
        $this->updateData();
    }

    public function changePage($next = true)
    {
        $next ? $this->currentPage++ : $this->currentPage--;
        $this->updateData();
    }

    public function changeBrands()
    {
        $brandIds = $this->model::select('brand_id')->distinct()->pluck('brand_id');
        $this->brands = Brand::whereIn('id', $brandIds)->get();
    }

    public function updateData()
    {
        $page = $this->dataQuery()->paginate('8', ['*'], 'page', $this->currentPage);
        $this->maxPage = $page->lastPage();
        $this->modelParts = $page->items();
    }

    public function dataQuery()
    {
        return $this->model::when($this->brandFilter, function ($q) {
            $q->where('brand_id', $this->brandFilter);
        });
    }

    public function render()
    {
        return view('livewire.oems');
    }
}
