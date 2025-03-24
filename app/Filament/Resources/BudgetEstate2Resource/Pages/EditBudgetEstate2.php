<?php

namespace App\Filament\Resources\BudgetEstate2Resource\Pages;

use App\Filament\Resources\BudgetEstate2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBudgetEstate2 extends EditRecord
{
    protected static string $resource = BudgetEstate2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
