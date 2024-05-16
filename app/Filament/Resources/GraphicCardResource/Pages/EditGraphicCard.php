<?php

namespace App\Filament\Resources\GraphicCardResource\Pages;

use App\Filament\Resources\GraphicCardResource;
use App\Filament\Resources\MotherboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGraphicCard extends EditRecord
{
    protected static string $resource = GraphicCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
