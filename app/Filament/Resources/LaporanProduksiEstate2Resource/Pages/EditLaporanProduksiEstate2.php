<?php

namespace App\Filament\Resources\LaporanProduksiEstate2Resource\Pages;

use App\Filament\Resources\LaporanProduksiEstate2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanProduksiEstate2 extends EditRecord
{
    protected static string $resource = LaporanProduksiEstate2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
