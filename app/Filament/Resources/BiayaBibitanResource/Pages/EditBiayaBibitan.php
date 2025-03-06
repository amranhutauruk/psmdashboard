<?php

namespace App\Filament\Resources\BiayaBibitanResource\Pages;

use App\Filament\Resources\BiayaBibitanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiayaBibitan extends EditRecord
{
    protected static string $resource = BiayaBibitanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
