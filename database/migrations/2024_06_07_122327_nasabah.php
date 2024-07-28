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
        Schema::create('nasabah', function (Blueprint $table) {
            $table->char('Id_nasabah', 5)->primary();
            $table->string('nama_nasabah', 35);
            $table->string('alamat', 50);
            $table->string('gender', 10);
            $table->string('no_hp', 15);
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabah');
    }
};

