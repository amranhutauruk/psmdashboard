<?php

namespace App\Filament\Resources\BiayaProduksiResource\Pages;

use App\Filament\Resources\BiayaProduksiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiayaProduksis extends ListRecords
{
    protected static string $resource = BiayaProduksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
