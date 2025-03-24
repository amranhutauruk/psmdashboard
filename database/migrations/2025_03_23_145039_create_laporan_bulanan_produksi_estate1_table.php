<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_bulanan_produksi_estate1', function (Blueprint $table) {
            $table->id();
            $table->string('month'); // Bulan (Jan, Feb, Mar, dst.)
            $table->integer('year'); // Tahun
            $table->float('budget'); // Budget
            $table->float('realisasi'); // Realisasi s/d Bulan Ini
            $table->float('persen'); // Persen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_bulanan_produksi_estate1');
    }
};
