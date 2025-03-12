<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanProduksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'estate_1',
        'estate_2',
        'plasma',
    ];
}
