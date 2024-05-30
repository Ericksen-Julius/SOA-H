<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * https://dbdiagram.io/d/Atraksi_SOA-664070b19e85a46d559b9d08
     */
    public function up(): void
    {
        Schema::create('atraksi', function (Blueprint $table) {
            $table->id();
            $table->integer('rating_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('info_penting');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('gps_location');
            $table->string('lowest_price');
            $table->string('discount_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atraksi');
    }
};
