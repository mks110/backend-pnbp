<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPiutangHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_piutang_h', function (Blueprint $table) {
            $table->string('id_hutang_h', 20)->primary();
            $table->string('kode_wajib_bayar', 20);
            $table->integer('tahun');
            $table->date('tanggal_jatuh_tempo')->nullable();
            $table->float('jumlah_piutang', 0, 0)->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->string('remark', 512)->nullable();
            $table->float('jumlah_kpknl', 0, 0)->nullable()->default(0);
            $table->date('tgl_penetapan')->nullable()->useCurrent();
            $table->string('anly01', 100)->nullable()->default('');
            $table->string('anly02', 100)->nullable()->default('');
            $table->string('anly03', 100)->nullable()->default('');
            $table->date('tanggal_berlaku_piutang')->nullable();
            $table->string('no_sp3n')->nullable();
            $table->float('jumlah_sp3n', 0, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_piutang_h');
    }
}
