<?php

namespace App\Filament\Resources\PersonaliaDanPendudukResource\Pages;

use App\Filament\Resources\PersonaliaDanPendudukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonaliaDanPenduduks extends ListRecords
{
    protected static string $resource = PersonaliaDanPendudukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
