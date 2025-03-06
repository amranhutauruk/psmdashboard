<?php

namespace App\Filament\Resources\LaporanKeuanganPendukungResource\Pages;

use App\Filament\Resources\LaporanKeuanganPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanKeuanganPendukung extends EditRecord
{
    protected static string $resource = LaporanKeuanganPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
