<?php

namespace App\Filament\Resources\BudgetEstate1Resource\Pages;

use App\Filament\Resources\BudgetEstate1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBudgetEstate1 extends EditRecord
{
    protected static string $resource = BudgetEstate1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
