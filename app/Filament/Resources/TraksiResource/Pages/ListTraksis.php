<?php

namespace App\Filament\Resources\TraksiResource\Pages;

use App\Filament\Resources\TraksiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTraksis extends ListRecords
{
    protected static string $resource = TraksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
