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
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->integer('atraksi_id');
            $table->string('type_id');
            $table->text('title');
            $table->text('description');
            $table->string('fasilitas');
            $table->string('cara_penukaran');
            $table->string('syarat_ketentuan');
            $table->string('harga_normal');
            $table->string('harga_discount');
            $table->string('masa_berlaku');
            $table->string('refundable');
            $table->timestamps();

            $table->foreign('atraksi_id')
            ->references('id')
            ->on('atraksi')
            ->onDelete('CASCADE');
            // Handle on delete behavior as per your application's need
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package');
    }
};
