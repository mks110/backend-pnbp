<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDetailPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_detail_piutang', function (Blueprint $table) {
            $table->string('id_detail_hutang', 25)->primary();
            $table->string('id_hutang_h', 20);
            $table->integer('no_urut');
            $table->integer('denda_ke');
            $table->date('tanggal')->nullable();
            $table->text('keterangan');
            $table->float('nominal', 0, 0)->nullable();
            $table->string('jenis_dk', 2);
            $table->float('saldo_hutang', 0, 0)->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->string('remark', 512)->nullable();
            $table->integer('keterangan_ke')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_detail_piutang');
    }
}
