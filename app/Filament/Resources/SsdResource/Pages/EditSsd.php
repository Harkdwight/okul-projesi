<?php

namespace App\Filament\Resources\SsdResource\Pages;

use App\Filament\Resources\SsdResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSsd extends EditRecord
{
    protected static string $resource = SsdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
