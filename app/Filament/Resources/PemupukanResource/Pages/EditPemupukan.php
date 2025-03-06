<?php

namespace App\Filament\Resources\PemupukanResource\Pages;

use App\Filament\Resources\PemupukanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemupukan extends EditRecord
{
    protected static string $resource = PemupukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
