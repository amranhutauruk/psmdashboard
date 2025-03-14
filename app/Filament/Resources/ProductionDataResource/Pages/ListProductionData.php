<?php

namespace App\Filament\Resources\ProductionDataResource\Pages;

use App\Filament\Resources\ProductionDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductionData extends ListRecords
{
    protected static string $resource = ProductionDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
