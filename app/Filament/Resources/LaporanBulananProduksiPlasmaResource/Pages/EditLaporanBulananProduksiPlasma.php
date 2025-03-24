<?php

namespace App\Filament\Resources\LaporanBulananProduksiPlasmaResource\Pages;

use App\Filament\Resources\LaporanBulananProduksiPlasmaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanBulananProduksiPlasma extends EditRecord
{
    protected static string $resource = LaporanBulananProduksiPlasmaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
