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
        // Schema::create('rekening', function (Blueprint $table) {
        //     $table->id('Id_rekening');
        //     $table->unsignedBigInteger('id_nasabah');
        //     $table->foreign('id_nasabah')->references('Id_nasabah')->on('nasabah');
        //     $table->string('nomor_akun');
        //     $table->decimal('jumlah_tabungan', 10, 2);
        //     $table->date('tanggal_buat');
        //     $table->date('tanggal_update');
        //     $table->timestamps();
        // });
    }

    /**
     * Rollback the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekening');
    }
};
