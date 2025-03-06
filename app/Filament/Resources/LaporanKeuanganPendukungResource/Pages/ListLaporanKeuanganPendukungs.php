<?php

namespace App\Filament\Resources\LaporanKeuanganPendukungResource\Pages;

use App\Filament\Resources\LaporanKeuanganPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanKeuanganPendukungs extends ListRecords
{
    protected static string $resource = LaporanKeuanganPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
