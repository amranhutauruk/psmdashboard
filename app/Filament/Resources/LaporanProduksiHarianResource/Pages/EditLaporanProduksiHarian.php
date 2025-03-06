<?php

namespace App\Filament\Resources\LaporanProduksiHarianResource\Pages;

use App\Filament\Resources\LaporanProduksiHarianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanProduksiHarian extends EditRecord
{
    protected static string $resource = LaporanProduksiHarianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
