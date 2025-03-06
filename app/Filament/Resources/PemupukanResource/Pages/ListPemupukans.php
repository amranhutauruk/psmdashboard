<?php

namespace App\Filament\Resources\PemupukanResource\Pages;

use App\Filament\Resources\PemupukanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemupukans extends ListRecords
{
    protected static string $resource = PemupukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
