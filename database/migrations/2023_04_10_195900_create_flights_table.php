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
    Schema::create('flights', function (Blueprint $table) {
      $table->id();
      $table->dateTime('departureDate');
      $table->dateTime('arrivalDate');
      $table->foreignId('from_airport_id');
      $table->foreignId('to_airport_id');
      $table->foreignId('plan_id');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('flights');
  }
};
