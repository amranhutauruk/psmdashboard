<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionData extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];
}
