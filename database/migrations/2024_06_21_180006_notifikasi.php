<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelNotifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_notifikasi', function (Blueprint $table) {
            $table->id('Id_notif');
            $table->foreignId('id_nasabah')->constrained('nasabah')->onDelete('cascade'); // Assuming 'nasabah' table exists
            $table->text('pesan');
            $table->boolean('is_read')->default(false);
            $table->dateTime('tanggal_buat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifikasi');
    }
}
