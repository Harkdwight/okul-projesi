<?php

namespace App\Filament\Resources\GraphicCardResource\Pages;

use App\Filament\Resources\GraphicCardResource;
use App\Filament\Resources\MotherboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGraphicCards extends ListRecords
{
    protected static string $resource = GraphicCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
