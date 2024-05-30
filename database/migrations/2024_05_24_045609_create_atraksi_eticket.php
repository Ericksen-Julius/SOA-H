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
        Schema::create('atraksi_eticket', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_code');
            $table->string('tiket_code');
            $table->integer('package_id');
            $table->string('nama');
            $table->string('jenis');
            $table->dateTime('valid_until');
            $table->timestamps();

            $table->foreign('package_id')
            ->references('id')
            ->on('package')
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atraksi_eticket');
    }
};
