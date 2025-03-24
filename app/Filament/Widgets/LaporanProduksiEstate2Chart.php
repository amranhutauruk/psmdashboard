<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\LaporanProduksiEstate2;

class LaporanProduksiEstate2Chart extends ChartWidget
{
   protected static ?string $heading = 'Laporan Produksi Estate 2';

   // Ubah menjadi public agar sesuai dengan kelas induk
   public ?string $filter = 'year';

   protected function getFilters(): ?array
   {
       $years = LaporanProduksiEstate2::query()
           ->select('year')
           ->distinct()
           ->orderBy('year', 'desc')
           ->pluck('year')
           ->toArray();

       // Perbaikan: Gunakan strval sebagai fungsi langsung, bukan string
       return array_combine(
           array_map('strval', $years), // Ubah strval menjadi bentuk callable
           array_map(fn($year) => "Tahun $year", $years)
       );
   }

   protected function getData(): array
   {
       $selectedYear = $this->filter ? (int) $this->filter : now()->year;

       $data = LaporanProduksiEstate2::query()
           ->where('year', $selectedYear)
           ->orderBy('month')
           ->get();

       return [
           'labels' => $data->pluck('month')->toArray(),
           'datasets' => [
               [
                   'label' => 'Budget',
                   'data' => $data->pluck('budget')->toArray(),
                   'backgroundColor' => '#FF6384',
               ],
               [
                   'label' => 'Realisasi s/d Bulan Ini',
                   'data' => $data->pluck('realisasi')->toArray(),
                   'backgroundColor' => '#36A2EB',
               ],
               [
                   'label' => 'Realisasi Ton/Ha',
                   'data' => $data->pluck('ton_ha')->toArray(),
                   'backgroundColor' => '#4BC0C0',
               ],
               [
                   'label' => 'Persen',
                   'data' => $data->pluck('persen')->toArray(),
                   'backgroundColor' => '#FFCE56',
               ],
           ],
       ];
   }

    protected function getType(): string
    {
        return 'bar';
    }
}
