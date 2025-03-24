<?php

namespace App\Filament\Resources\LaporanBulananProduksiEstate1Resource\Pages;

use App\Filament\Resources\LaporanBulananProduksiEstate1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanBulananProduksiEstate1s extends ListRecords
{
    protected static string $resource = LaporanBulananProduksiEstate1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
