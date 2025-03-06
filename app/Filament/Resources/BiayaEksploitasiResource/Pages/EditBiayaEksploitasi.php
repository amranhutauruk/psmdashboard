<?php

namespace App\Filament\Resources\BiayaEksploitasiResource\Pages;

use App\Filament\Resources\BiayaEksploitasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiayaEksploitasi extends EditRecord
{
    protected static string $resource = BiayaEksploitasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
