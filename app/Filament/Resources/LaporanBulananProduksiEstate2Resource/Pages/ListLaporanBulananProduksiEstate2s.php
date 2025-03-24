<?php

namespace App\Filament\Resources\LaporanBulananProduksiEstate2Resource\Pages;

use App\Filament\Resources\LaporanBulananProduksiEstate2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanBulananProduksiEstate2s extends ListRecords
{
    protected static string $resource = LaporanBulananProduksiEstate2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
