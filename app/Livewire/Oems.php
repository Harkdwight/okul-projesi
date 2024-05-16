<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Processor;
use App\Models\User;
use App\Models\UserBasket;
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
        $this->model = Processor::class;
        $this->currentPage = 1;
        $this->brandFilter = null;
        $this->brands = $this->changeBrands();
        $this->modelParts = $this->updateData();
        $this->maxPage = $this->getMaxPage();
        $this->selected = $this->setSelected();
    }

    protected $listeners = ['modelChange'];

    public function modelChange($value)
    {
        $this->currentPage = 1;
        $this->model = $value['model'];
        $this->changeBrands();
        $this->updateData();
        $this->setSelected();
    }

    public function changePage($next = true)
    {
        if ($next) {
            $_page = $this->currentPage + 1;
        } else {
            $_page = $this->currentPage - 1;
        }

        if ($next && $_page > $this->maxPage) {
            return;
        } else if (!$next && $_page < 1) {
            return;
        } else {
            $this->currentPage = $_page;
            $this->updateData();
        }
    }

    public function changeBrands()
    {
        $this->brandFilter = null;
        $brandIds = $this->model::select('brand_id')->distinct()->pluck('brand_id');
        $res = Brand::whereIn('id', $brandIds)->get();
        $this->brands = $res;
        return $res;
    }

    public function updateData()
    {
        $page = $this->dataQuery()->paginate('10', ['*'], 'page', $this->currentPage);
        $this->maxPage = $page->lastPage();
        $this->modelParts = $page->items();
        return $page->items();
    }

    public function getMaxPage()
    {
        return $this->dataQuery()->paginate('10', ['*'], 'page', $this->currentPage)->lastPage();
    }

    public function dataQuery()
    {
        return $this->model::when($this->brandFilter, function ($q) {
            $q->where('brand_id', $this->brandFilter);
        });
    }

    public function selectItem($value)
    {
        $this->selected = $value['id'];
        $this->dispatch('itemSelect', ['model' => $this->model, 'item' => $value]);

        UserBasket::updateOrCreate([
            'user_id' => auth()->id(),
            'model' => $this->model,
        ], [
            'oem_id' => $value['id']
        ]);
    }

    public function setSelected()
    {
        $basket = UserBasket::whereUserId(auth()->id())->whereModel($this->model)->first();
        $this->selected = $basket?->oemPart->id;
        return $basket?->oemPart->id;
    }

    public function render()
    {
        return view('livewire.oems');
    }
}
