<div class="col-md-3 cart p-1">
    <div class="cart-contents">
        <div class="cart-part">
            <p class="small bold">İşlemci</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Processor::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">Anakart</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Motherboard::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">Ekran Kartı</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\GraphicCard::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">Ram</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Ram::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">Güç Kaynağı</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Psu::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">HDD</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Hdd::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">SSD</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Ssd::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">Sıvı Soğutucu</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Cooler::class]['name'] ?? '-'}}</p>
        </div>
        <div class="cart-part">
            <p class="small bold">Kasa</p>
            <p class="cart-part-text ms-2">{{$this->data[\App\Models\Tower::class]['name'] ?? '-'}}</p>
        </div>

    </div>
    <div class="cart-info mt-3">
        Toplam Tutar: {{$this->price}}₺
    </div>
</div>
