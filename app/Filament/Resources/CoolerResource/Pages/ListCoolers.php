<?php

namespace App\Filament\Resources\CoolerResource\Pages;

use App\Filament\Resources\CoolerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoolers extends ListRecords
{
    protected static string $resource = CoolerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
