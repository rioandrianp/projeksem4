<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tabel_transaksi', function (Blueprint $table) {
        //     $table->id('Id_transaksi');
        //     $table->foreignId('Id_nasabah')->constrained('nasabah')->onDelete('cascade');
        //     $table->string('tipe_transaksi', 50);
        //     $table->decimal('jumlah_transaksi', 15, 2);
        //     $table->date('tanggal_transaksi');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tabel_transaksi');
    }
}
