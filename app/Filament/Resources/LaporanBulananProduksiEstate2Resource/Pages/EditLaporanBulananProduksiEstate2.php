<?php

namespace App\Filament\Resources\LaporanBulananProduksiEstate2Resource\Pages;

use App\Filament\Resources\LaporanBulananProduksiEstate2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanBulananProduksiEstate2 extends EditRecord
{
    protected static string $resource = LaporanBulananProduksiEstate2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
