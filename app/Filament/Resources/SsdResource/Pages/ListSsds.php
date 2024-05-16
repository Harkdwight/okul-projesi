<?php

namespace App\Filament\Resources\SsdResource\Pages;

use App\Filament\Resources\SsdResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSsds extends ListRecords
{
    protected static string $resource = SsdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
