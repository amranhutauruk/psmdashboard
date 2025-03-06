<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaBibitan extends Model
{
    use HasFactory;
    protected $table = 'biaya_bibitan';
    protected $fillable = ['file'];
}
