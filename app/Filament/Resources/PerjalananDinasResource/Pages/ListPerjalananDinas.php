<?php

namespace App\Filament\Resources\PerjalananDinasResource\Pages;

use App\Filament\Resources\PerjalananDinasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerjalananDinas extends ListRecords
{
    protected static string $resource = PerjalananDinasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
