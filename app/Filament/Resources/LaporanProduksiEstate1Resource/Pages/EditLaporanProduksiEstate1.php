<?php

namespace App\Filament\Resources\LaporanProduksiEstate1Resource\Pages;

use App\Filament\Resources\LaporanProduksiEstate1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanProduksiEstate1 extends EditRecord
{
    protected static string $resource = LaporanProduksiEstate1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
