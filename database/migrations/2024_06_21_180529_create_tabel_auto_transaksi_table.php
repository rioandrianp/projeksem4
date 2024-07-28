<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelAutoTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_auto_transaksi', function (Blueprint $table) {
            $table->id('Id_auto');
            $table->foreignId('id_rekening')->constrained('rekening')->onDelete('cascade'); // Assuming 'rekening' table exists
            $table->string('tipe_transaksi', 50);
            $table->foreignId('penerima_transaksi')->constrained('penerima')->onDelete('cascade'); // Assuming 'penerima' table exists
            $table->decimal('jumlah_transaksi', 15, 2);
            $table->date('tanggal_transaksi');
            $table->string('status_transaksi', 50);
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
        Schema::dropIfExists('tabel_auto_transaksi');
    }
}
