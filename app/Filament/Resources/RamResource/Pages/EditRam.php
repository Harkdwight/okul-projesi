<?php

namespace App\Filament\Resources\RamResource\Pages;

use App\Filament\Resources\RamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRam extends EditRecord
{
    protected static string $resource = RamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
