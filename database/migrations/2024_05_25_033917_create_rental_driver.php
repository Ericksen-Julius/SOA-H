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
        Schema::create('rental_driver', function (Blueprint $table) {
            $table->id();
            $table->integer('rental_provider_id');
            $table->string('name');
            $table->string('gender');
            $table->string('age');
            $table->string('phone');
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
        Schema::dropIfExists('rental_driver');
    }
};
