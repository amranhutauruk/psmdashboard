<?php

namespace App\Filament\Resources\ProductionDataResource\Pages;

use App\Filament\Resources\ProductionDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductionData extends EditRecord
{
    protected static string $resource = ProductionDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
