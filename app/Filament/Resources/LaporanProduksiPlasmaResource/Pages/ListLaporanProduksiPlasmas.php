<?php

namespace App\Filament\Resources\LaporanProduksiPlasmaResource\Pages;

use App\Filament\Resources\LaporanProduksiPlasmaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanProduksiPlasmas extends ListRecords
{
    protected static string $resource = LaporanProduksiPlasmaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
