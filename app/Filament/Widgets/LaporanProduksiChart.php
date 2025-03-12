<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\LaporanProduksi;

class LaporanProduksiChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data = LaporanProduksi::latest()->first();

        return [
            'datasets' => [
                [
                    'label' => 'Luas Area (Ha)',
                    'data' => [$data->estate_1, $data->estate_2, $data->plasma],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                ],
            ],
            'labels' => ['Estate 1', 'Estate 2', 'Plasma'],
        ];
    }

    protected function getWidgets(): array
    {
        return [
            LaporanProduksiChart::class,
        ];
    }
    protected function getType(): string
    {
        return 'pie';
    }
}
