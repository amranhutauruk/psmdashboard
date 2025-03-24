<?php

namespace App\Filament\Resources\LaporanBulananProduksiEstate1Resource\Pages;

use App\Filament\Resources\LaporanBulananProduksiEstate1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanBulananProduksiEstate1 extends EditRecord
{
    protected static string $resource = LaporanBulananProduksiEstate1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
