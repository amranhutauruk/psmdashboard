<?php

namespace App\Filament\Resources\TraksiResource\Pages;

use App\Filament\Resources\TraksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTraksi extends EditRecord
{
    protected static string $resource = TraksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
