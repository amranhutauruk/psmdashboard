<?php

namespace App\Filament\Resources\BudgetEstate1Resource\Pages;

use App\Filament\Resources\BudgetEstate1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBudgetEstate1s extends ListRecords
{
    protected static string $resource = BudgetEstate1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
