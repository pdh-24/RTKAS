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
        Schema::create('transaksi_kas', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('nik_kk')->index();
            $table->text('bukti');
            $table->enum('jenis', ['pemasukan', 'pengeluaran'])->change();
            $table->enum('status', ['proses', 'selesai'])->change();
            $table->timestamps();

            $table->foreign('nik_kk')->references('nik_kk')->on('kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_kas');
    }
};
