<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //  Harusnya isinya ada terkoneksi dengan rental car karena
    public function up(): void
    {
        Schema::create('rental_car', function (Blueprint $table) {
            $table->id();
            $table->integer('rental_provider_id');
            $table->string('brand');
            $table->string('name');
            $table->string('type');
            $table->string('transmission');
            $table->string('year');
            $table->string('seats');
            $table->string('luggages');
            $table->string('price');
            $table->timestamps();
            $table->foreign('rental_provider_id')
            ->references('id')
            ->on('rental_provider')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_car');
    }
};
