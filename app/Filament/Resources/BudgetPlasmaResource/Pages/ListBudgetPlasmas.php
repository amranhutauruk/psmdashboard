<?php

namespace App\Filament\Resources\BudgetPlasmaResource\Pages;

use App\Filament\Resources\BudgetPlasmaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBudgetPlasmas extends ListRecords
{
    protected static string $resource = BudgetPlasmaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
