<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDetailPembayaranSimponiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_detail_pembayaran_simponi', function (Blueprint $table) {
            $table->string('area_bayar', 10)->nullable();
            $table->string('idx', 20)->nullable();
            $table->float('jumlah_pembayaran', 0, 0)->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->string('kdtarif', 6)->nullable();
            $table->string('kdpp', 7)->nullable();
            $table->string('kdakun', 6)->nullable();
            $table->decimal('jmltarif', 12, 0)->nullable();
            $table->string('satuan', 60)->nullable();
            $table->decimal('psntarif', 20, 0)->nullable();
            $table->text('keterangan')->nullable();
            $table->char('kdlokasi', 2)->nullable();
            $table->char('kdkabkota', 2)->nullable();
            $table->float('luas_areal', 0, 0)->nullable();
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
        Schema::dropIfExists('t_detail_pembayaran_simponi');
    }
}
