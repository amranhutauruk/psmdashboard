<?php

namespace App\Filament\Resources\ChartDataResource\Pages;

use App\Filament\Resources\ChartDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChartData extends ListRecords
{
    protected static string $resource = ChartDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
