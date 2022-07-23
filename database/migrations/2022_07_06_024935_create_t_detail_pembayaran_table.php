<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDetailPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_detail_pembayaran', function (Blueprint $table) {
            $table->string('area_bayar', 10);
            $table->string('idx_pembayaran', 20);
            $table->float('jumlah_pembayaran', 0, 0)->nullable();
            $table->float('luas_area_hp', 0, 0)->nullable();
            $table->float('luas_area_hl', 0, 0)->nullable();
            $table->text('anly01')->nullable();
            $table->text('anly02')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->string('kode_tarif', 10)->nullable();
            $table->string('kode_pp', 10)->nullable();
            $table->string('kode_akun', 6)->nullable();
            $table->decimal('tarif_pnbp', 12, 0)->nullable();
            $table->string('satuan', 60)->nullable();
            $table->decimal('total_tarif', 12, 0)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('kode_wajib_bayar', 20)->nullable();
            $table->integer('tahun')->nullable();

            $table->primary(['area_bayar', 'idx_pembayaran']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_detail_pembayaran');
    }
}
