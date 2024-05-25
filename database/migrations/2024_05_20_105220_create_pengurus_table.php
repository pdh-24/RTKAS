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
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id('id_pengurus');
            $table->string('nama_pengurus', 50);
            $table->unsignedBigInteger('id_akun')->index();
            // $table->string('jabatan', 10);
            $table->timestamps();

            $table->foreign('id_akun')->references('id_akun')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus');
    }
};
