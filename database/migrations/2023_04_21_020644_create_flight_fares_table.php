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
        Schema::create('flight_fares', function (Blueprint $table) {
              $table->id();
              $table->foreignId('flight_id')->constrained()->onDelete('cascade');
              $table->foreignId('cabin_id')->constrained()->onDelete('cascade');
              $table->decimal('fare', 8, 2);
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_fares');
    }
};
