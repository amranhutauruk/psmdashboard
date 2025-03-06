<?php

namespace App\Filament\Resources\PRODUKSIResource\Widgets;

use Filament\Widgets\ChartWidget;

class ProductionChart extends ChartWidget
{
   protected static ?string $heading = 'Grafik Persentase Produksi';

   protected function getData(): array
   {
       $productions = Production::latest()->take(10)->get();

       return [
           'labels' => ['Estate 1', 'Estate 2', 'Plasma'],
           'datasets' => [
               [
                   'label' => 'Rata-rata Persentase Produksi',
                   'data' => [
                       $productions->avg('estate_1'),
                       $productions->avg('estate_2'),
                       $productions->avg('plasma'),
                   ],
                   'backgroundColor' => ['#FF6384', '#36A2EB', '#4BC0C0'],
               ],
           ],
       ];
   }

   protected function getType(): string
   {
       return 'pie'; // Jenis grafik: bar, line, pie, dll.
   }
}
