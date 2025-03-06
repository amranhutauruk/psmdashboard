<?php

namespace App\Filament\Resources\CurahHujanResource\Pages;

use App\Filament\Resources\CurahHujanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurahHujan extends EditRecord
{
    protected static string $resource = CurahHujanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
