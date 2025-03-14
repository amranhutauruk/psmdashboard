<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
   {
      Schema::create('chart_data', function (Blueprint $table) {
         $table->id();
         $table->date('input_date'); // Tanggal input
         $table->float('estate_1');  // Nilai Estate 1
         $table->float('estate_2');  // Nilai Estate 2
         $table->float('plasma');    // Nilai Plasma
         $table->timestamps();
      });
   }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chart_data');
    }
};
