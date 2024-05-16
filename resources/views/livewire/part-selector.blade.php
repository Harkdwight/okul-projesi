<div class="row mt-4 justify-content-md-center">
    @foreach($parts as $part)
        <input type="image" class="part-icon {{$part['selected'] ? 'selected-part' : ''}}"
               src="{{asset($part['icon'])}}"
               alt="{{$part['name']}}"
               wire:click="makeSelected('{{$part['name']}}')"
        >
    @endforeach
</div>
