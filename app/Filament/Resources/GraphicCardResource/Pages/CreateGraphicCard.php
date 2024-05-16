<?php

namespace App\Filament\Resources\MotherboardResource\Pages;

use App\Filament\Resources\GraphicCardResource;
use App\Filament\Resources\MotherboardResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGraphicCard extends CreateRecord
{
    protected static string $resource = GraphicCardResource::class;
}
