<?php

namespace App\Filament\Resources\BudgetEstate2Resource\Pages;

use App\Filament\Resources\BudgetEstate2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBudgetEstate2s extends ListRecords
{
    protected static string $resource = BudgetEstate2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
