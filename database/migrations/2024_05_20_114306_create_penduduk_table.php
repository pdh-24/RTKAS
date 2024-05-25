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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id('nik');
            $table->string('nama_lengkap');
            // $table->date('ttl');
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghuchu'])->change();
            $table->enum('status', ['tetap', 'sementara'])->change();
            $table->unsignedBigInteger('nik_kk')->index();
            $table->unsignedBigInteger('id_alamat')->index();
            $table->unsignedBigInteger('id_akun')->index();
            $table->timestamps();

            $table->foreign('nik_kk')->references('nik_kk')->on('kk');
            $table->foreign('id_alamat')->references('id_alamat')->on('alamat');
            $table->foreign('id_akun')->references('id_akun')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
