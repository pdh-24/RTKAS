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
        Schema::create('dana_darurat', function (Blueprint $table) {
            $table->id('id_dana_darurat');
            $table->unsignedBigInteger('nik_kk')->index();
            $table->text('alasan');
            $table->decimal('nominal', 10, 2);
            $table->text('bukti');
            $table->enum('status', ['selesai', 'menunggu', 'ditolak'])->change();
            $table->timestamps();

            $table->foreign('nik_kk')->references('nik_kk')->on('kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dana_darurat');
    }
};
