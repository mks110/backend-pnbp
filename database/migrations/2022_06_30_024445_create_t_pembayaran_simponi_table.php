<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPembayaranSimponiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pembayaran_simponi', function (Blueprint $table) {
            $table->string('idx', 20)->nullable();
            $table->string('kode_wajib_bayar', 20)->nullable();
            $table->date('tgl_stor_bank')->nullable();
            $table->float('jumlah_pembayaran', 0, 0)->nullable();
            $table->string('bank_pos_persepsi')->nullable();
            $table->date('tgl_ntpn')->nullable();
            $table->string('ntpn')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('pembayaran_atas')->nullable();
            $table->integer('tahun')->nullable();
            $table->smallInteger('jumlah_bulan_denda')->nullable();
            $table->string('ntb', 15)->nullable();
            $table->smallInteger('input_sakpa')->nullable();
            $table->date('legalisir')->nullable();
            $table->smallInteger('manual')->nullable();
            $table->string('nomor_pembukuan', 25)->nullable();
            $table->integer('tahun_pembukuan')->nullable();
            $table->smallInteger('no_pembukuan')->nullable();
            $table->string('tipe_pembayaran', 16)->nullable();
            $table->string('kode_biling', 32)->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->timestamp('tgl_jam_billing')->nullable();
            $table->timestamp('tgl_jam_expired_billing')->nullable();
            $table->string('channel_pembayaran', 4)->nullable();
            $table->string('trx_id_simponi', 20)->nullable();
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
        Schema::dropIfExists('t_pembayaran_simponi');
    }
}
