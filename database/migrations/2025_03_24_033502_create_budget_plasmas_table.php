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
        Schema::create('budget_plasmas', function (Blueprint $table) {
            $table->id();
            $table->string('month'); // Bulan (Jan, Feb, Mar, dst.)
            $table->integer('year'); // Tahun
            $table->float('budget_satu_tahun');// Budget
            $table->float('ton_ha'); // Realisasi s/d Bulan Ini
            $table->float('persen'); // Persen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget_plasmas');
    }
};
