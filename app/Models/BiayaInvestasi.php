<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaInvestasi extends Model
{
    use HasFactory;
    protected $table = 'biaya_investasi';
    protected $fillable = ['file'];
}
