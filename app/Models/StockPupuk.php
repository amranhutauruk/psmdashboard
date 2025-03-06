<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockPupuk extends Model
{
    use HasFactory;
    protected $table = 'stock_pupuk';
    protected $fillable = ['file'];
}
