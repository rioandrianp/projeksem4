<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        // Schema::create('laporan', function (Blueprint $table) {
        //     $table->id('Id_laporan');
        //     $table->date('tanggal');
        //     $table->time('jam');
        //     $table->unsignedBigInteger('nama_pegawai');
        //     $table->unsignedBigInteger('nama_nasabah');
        //     $table->foreign('nama_pegawai')->references('Id_pegawai')->on('pegawai');
        //     $table->foreign('nama_nasabah')->references('Id_nasabah')->on('nasabah');
        //     $table->integer('jumlah_koin_100')->nullable();
        //     $table->integer('jumlah_koin_200')->nullable();
        //     $table->integer('jumlah_koin_500')->nullable();
        //     $table->integer('jumlah_koin_1000')->nullable();
        //     $table->decimal('jumlah_rupiah', 10, 2)->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Rollback migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
