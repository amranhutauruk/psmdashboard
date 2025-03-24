<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBulananProduksiEstate2 extends Model
{
    use HasFactory;
    // Tentukan nama tabel secara eksplisit
    protected $table = 'laporan_bulanan_produksi_estate2s';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'year',
        'month',
        'budget',
        'realisasi',
        'persen',
    ];
}
