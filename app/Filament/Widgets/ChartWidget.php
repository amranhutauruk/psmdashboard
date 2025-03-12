<?php

namespace App\Filament\Widgets;


use App\Models\ChartData;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ChartWidget extends LineChartWidget
{
    protected static ?string $heading = 'Laporan Produksi Harian';

    protected function getData(): array
    {
        // Ambil data Estate 1
        $estate1Data = Trend::model(ChartData::class)
            ->between(
                start: now()->subDays(30),
                end: now(),
            )
            ->perDay()
            ->sum('estate_1'); // Gunakan sum() untuk menjumlahkan nilai Estate 1

        // Ambil data Estate 2
        $estate2Data = Trend::model(ChartData::class)
            ->between(
                start: now()->subDays(30),
                end: now(),
            )
            ->perDay()
            ->sum('estate_2'); // Gunakan sum() untuk menjumlahkan nilai Estate 2

        // Ambil data Plasma
        $plasmaData = Trend::model(ChartData::class)
            ->between(
                start: now()->subDays(30),
                end: now(),
            )
            ->perDay()
            ->sum('plasma'); // Gunakan sum() untuk menjumlahkan nilai Plasma

        return [
            'datasets' => [
                [
                    'label' => 'Estate 1',
                    'data' => $estate1Data->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Estate 2',
                    'data' => $estate2Data->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Plasma',
                    'data' => $plasmaData->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $estate1Data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
