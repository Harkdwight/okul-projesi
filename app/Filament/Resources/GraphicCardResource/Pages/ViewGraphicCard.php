<?php

namespace App\Filament\Resources\GraphicCardResource\Pages;

use App\Filament\Resources\GraphicCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGraphicCard extends ViewRecord
{
    protected static string $resource = GraphicCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
