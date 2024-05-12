<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{$this->model ?? 'model'}}
                <div class="card-header">{{ __('Toplama sihirbaz') }}</div>
                <div class="row">
                    <div class="col-9">
                        <livewire:part-selector/>
                        <livewire:oems/>
                    </div>
                    <livewire:cart/>
                </div>
            </div>
        </div>
    </div>
</div>
