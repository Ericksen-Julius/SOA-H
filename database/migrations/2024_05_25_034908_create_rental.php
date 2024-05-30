<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Nanti reference ke rental provider
    // Untuk Get rental car+driver nanti join table dg pke common key (rental_provider_id), table yg di join rental_car dan rental_provider
    public function up(): void
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_provider_id');
            $table->unsignedBigInteger('rental_products_id');
            $table->string('location');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            // Duration gausah harusnya sdh ada datetime
            $table->timestamps();

            $table->foreign('rental_provider_id')
            ->references('id')
            ->on('rental_provider')
            ->onDelete('cascade');
            $table->foreign('rental_products_id')
            ->references('id')
            ->on('rental_products')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental');
    }
};
