<?php

namespace App\Filament\Resources\ChartDataResource\Pages;

use App\Filament\Resources\ChartDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChartData extends EditRecord
{
    protected static string $resource = ChartDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
