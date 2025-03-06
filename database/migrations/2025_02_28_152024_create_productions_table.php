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
      Schema::create('productions', function (Blueprint $table) {
         $table->id();
         $table->float('estate_1');
         $table->float('estate_2');
         $table->float('plasma');
         $table->timestamps();
      });
   }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productions');
    }
};
