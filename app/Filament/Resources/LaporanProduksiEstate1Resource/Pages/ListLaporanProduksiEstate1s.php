<?php

namespace App\Filament\Resources\LaporanProduksiEstate1Resource\Pages;

use App\Filament\Resources\LaporanProduksiEstate1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanProduksiEstate1s extends ListRecords
{
    protected static string $resource = LaporanProduksiEstate1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
