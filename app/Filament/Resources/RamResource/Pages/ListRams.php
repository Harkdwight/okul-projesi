<?php

namespace App\Filament\Resources\RamResource\Pages;

use App\Filament\Resources\RamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRams extends ListRecords
{
    protected static string $resource = RamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
