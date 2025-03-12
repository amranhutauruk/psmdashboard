<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartData extends Model
{
    use HasFactory;
    protected $fillable = [
      'input_date', // Tambahkan ini
      'estate_1',  // Tambahkan ini
      'estate_2',  // Tambahkan ini
      'plasma',    // Tambahkan ini
  ];
}
