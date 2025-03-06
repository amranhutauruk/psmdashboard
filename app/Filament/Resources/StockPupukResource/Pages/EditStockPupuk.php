<?php

namespace App\Filament\Resources\StockPupukResource\Pages;

use App\Filament\Resources\StockPupukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStockPupuk extends EditRecord
{
    protected static string $resource = StockPupukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
