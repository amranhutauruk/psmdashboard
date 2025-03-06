<?php

namespace App\Filament\Resources\ArealStatementResource\Pages;

use App\Filament\Resources\ArealStatementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArealStatement extends EditRecord
{
    protected static string $resource = ArealStatementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
