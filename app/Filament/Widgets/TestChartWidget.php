<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class TestChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Laporan Produksi Bulanan Estate 1';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Persentase Produksi',
                    'data' => [546,230,110,334,551,332,441,68,99,472,641,333], // Data yang akan ditampilkan pada grafik
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    'borderWidth' => 1,
                ],
            ],
            'labels' => ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'], // Label sumbu X
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
