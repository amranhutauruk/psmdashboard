<?php

namespace App\Filament\Resources\StockPupukResource\Pages;

use App\Filament\Resources\StockPupukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStockPupuks extends ListRecords
{
    protected static string $resource = StockPupukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
