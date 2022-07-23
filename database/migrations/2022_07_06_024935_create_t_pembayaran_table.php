<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pembayaran', function (Blueprint $table) {
            $table->string('idx', 20)->primary();
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
            $table->string('area_bayar', 32)->nullable();
            $table->string('anly01', 32)->nullable();
            $table->string('anly02', 32)->nullable();
            $table->text('anly03')->nullable();
            $table->text('anly04')->nullable();
            $table->text('anly05')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->string('kode_kl', 3)->nullable();
            $table->string('kode_eselon_1', 2)->nullable();
            $table->string('kode_satker', 6)->nullable();
            $table->timestamp('tgl_jam_billing')->nullable();
            $table->timestamp('tgl_jam_expired_billing')->nullable();
            $table->decimal('jumlah_pembayaran_usd', 12)->nullable();
            $table->string('channel_pembayaran', 4)->nullable();
            $table->string('npwp', 15)->nullable();
            $table->bigInteger('kode_wajib_bayar_simponi')->nullable();
            $table->string('kode_mata_uang')->nullable();
            $table->string('provinsi', 2)->nullable();
            $table->string('kabupaten', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pembayaran');
    }
}
