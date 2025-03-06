<?php

namespace App\Filament\Resources\BiayaInvestasiResource\Pages;

use App\Filament\Resources\BiayaInvestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiayaInvestasis extends ListRecords
{
    protected static string $resource = BiayaInvestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
