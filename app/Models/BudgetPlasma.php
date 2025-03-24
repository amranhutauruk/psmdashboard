<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetPlasma extends Model
{
    use HasFactory;
    protected $table = 'budget_plasmas';

     // Kolom yang dapat diisi (fillable)
     protected $fillable = [
         'year',
         'month',
         'budget_satu_tahun',
         'ton_ha',
         'persen',
     ];
}
