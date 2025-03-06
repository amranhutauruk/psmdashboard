<?php

namespace App\Filament\Resources\BiayaEksploitasiResource\Pages;

use App\Filament\Resources\BiayaEksploitasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiayaEksploitasis extends ListRecords
{
    protected static string $resource = BiayaEksploitasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
