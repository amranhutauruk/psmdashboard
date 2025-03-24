<?php

namespace App\Filament\Resources\BudgetPlasmaResource\Pages;

use App\Filament\Resources\BudgetPlasmaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBudgetPlasma extends EditRecord
{
    protected static string $resource = BudgetPlasmaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
