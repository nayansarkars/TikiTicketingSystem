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
    Schema::create('seat_allocations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('trip_id');
        $table->unsignedInteger('seat_number');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('trip_id')->references('id')->on('trips');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_allocations');
    }
};
