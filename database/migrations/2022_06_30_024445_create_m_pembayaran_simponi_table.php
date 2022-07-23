<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPembayaranSimponiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pembayaran_simponi', function (Blueprint $table) {
            $table->string('idx', 20)->primary();
            $table->string('kode_wajib_bayar', 20)->nullable();
            $table->float('tahun', 0, 0)->nullable();
            $table->float('jumlah_pembayaran', 0, 0)->nullable();
            $table->string('transaksi', 5)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor')->nullable();
            $table->string('delete', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_pembayaran_simponi');
    }
}
