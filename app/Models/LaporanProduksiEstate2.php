<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanProduksiEstate2 extends Model
{
    use HasFactory;
    // Tentukan nama tabel secara eksplisit
    protected $table = 'laporan_produksi_estate2s';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'year',
        'month',
        'budget',
        'realisasi',
        'ton_ha',
        'persen',
    ];
}
