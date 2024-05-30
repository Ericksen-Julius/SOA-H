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
        Schema::create('rental_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_car_id');
            $table->unsignedBigInteger('rental_driver_id');
            $table->timestamps();
            
            $table->foreign('rental_car_id')
            ->references('id')
            ->on('rental_car')
            ->onDelete('cascade');
            $table->foreign('rental_driver_id')
            ->references('id')
            ->on('rental_driver')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_products');
    }
};
