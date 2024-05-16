<div class="oem-selector mt-4 card">
    <div class="oem-header card-header">
        <div>
            <label for="brand">Marka:</label>
            <select id="oem-brand-selector" name="brand" wire:change="updateData" wire:model="brandFilter">
                <option value="{{null}}">-none-</option>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
            <span style="float: right">
                <input wire:click="changePage('{{false}}')" type="button" value="<" {{$this->currentPage <= 1 ? 'disabled': ''}}/>
                <span>{{$this->currentPage}} / {{$maxPage}}</span>
                <input wire:click="changePage('{{true}}')" type="button" value=">" {{$this->currentPage >= $this->maxPage ? 'disabled' : ''}}/>
            </span>
        </div>
    </div>
    <div class="card-body">
        <div class="grid row gap-2 justify-content-md-center">
            @foreach($modelParts as $part)
                <div wire:click="selectItem({{$part}})"
                     class="oem-card-part card {{$this->selected === $part['id'] ? 'oem-card-part-selected': ""}}">
                    <center>
                        <img class="oem-image card-img img-fluid" src="{{asset($part['img'])}}" alt="mo">
                        <h6>{{$part['name']}}</h6>
                        <h8>{{$part['price']}}₺</h8>
                    </center>
                </div>
            @endforeach

        </div>
    </div>
</div>
