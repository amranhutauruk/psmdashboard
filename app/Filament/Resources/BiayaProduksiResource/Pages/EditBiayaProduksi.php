<?php

namespace App\Filament\Resources\BiayaProduksiResource\Pages;

use App\Filament\Resources\BiayaProduksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiayaProduksi extends EditRecord
{
    protected static string $resource = BiayaProduksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
