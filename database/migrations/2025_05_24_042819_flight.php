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
            $table->unsignedBigInteger('airline_id');
            $table->unsignedBigInteger('class_type');
            $table->unsignedBigInteger('airport_origin');
            $table->unsignedBigInteger('airport_destination');
            $table->integer('capacity');
            $table->integer('weight_limit');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->foreign('airport_origin')->references('id')->on('airport')->onDelete('cascade');
            $table->foreign('airport_destination')->references('id')->on('airport')->onDelete('cascade');
            $table->foreign('class_type')->references('id')->on('airline_class')->onDelete('cascade');
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
