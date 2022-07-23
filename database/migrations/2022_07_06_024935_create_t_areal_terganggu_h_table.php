<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTArealTergangguHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_areal_terganggu_h', function (Blueprint $table) {
            $table->string('kode_wajib_bayar', 20);
            $table->string('jenis_data', 16);
            $table->integer('tahun');
            $table->date('tanggal')->nullable();
            $table->float('rencana_pembayaran', 0, 0)->nullable();
            $table->timestamp('created')->nullable()->useCurrent();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->string('remark', 512)->nullable();
            $table->smallInteger('status')->nullable();
            $table->date('tanggal_bav')->nullable();
            $table->string('no_bav', 50)->nullable();
            $table->date('tanggal_jatuh_tempo')->nullable();
            $table->string('kategori', 16)->nullable();
            $table->float('tarif_hp', 0, 0)->nullable();
            $table->float('tarif_hl', 0, 0)->nullable();
            $table->float('luas_total', 0, 0)->nullable();
            $table->float('luas_hp', 0, 0)->nullable();
            $table->float('luas_hl', 0, 0)->nullable();

            $table->primary(['kode_wajib_bayar', 'jenis_data', 'tahun']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_areal_terganggu_h');
    }
}
