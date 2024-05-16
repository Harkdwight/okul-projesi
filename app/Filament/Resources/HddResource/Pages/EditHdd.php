<?php

namespace App\Filament\Resources\HddResource\Pages;

use App\Filament\Resources\HddResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHdd extends EditRecord
{
    protected static string $resource = HddResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
