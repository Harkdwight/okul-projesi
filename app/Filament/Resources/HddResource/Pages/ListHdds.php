<?php

namespace App\Filament\Resources\HddResource\Pages;

use App\Filament\Resources\HddResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHdds extends ListRecords
{
    protected static string $resource = HddResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
