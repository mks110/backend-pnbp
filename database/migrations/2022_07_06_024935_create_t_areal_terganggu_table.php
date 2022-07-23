<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTArealTergangguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_areal_terganggu', function (Blueprint $table) {
            $table->smallInteger('id_areal_terganggu');
            $table->string('kode_wajib_bayar', 20);
            $table->string('jenis_data', 16);
            $table->integer('tahun');
            $table->string('jenis_areal_terganggu', 6);
            $table->float('hp_a', 0, 0)->nullable()->default(0);
            $table->float('hp_b', 0, 0)->nullable()->default(0);
            $table->float('hl_a', 0, 0)->nullable()->default(0);
            $table->float('hl_b', 0, 0)->nullable()->default(0);
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->text('review')->nullable();
            $table->float('rencana_pembayaran_hp', 0, 0)->nullable();
            $table->string('jenis_at')->nullable();
            $table->float('rencana_pembayaran_hl', 0, 0)->nullable();

            $table->primary(['id_areal_terganggu', 'kode_wajib_bayar', 'jenis_data', 'tahun', 'jenis_areal_terganggu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_areal_terganggu');
    }
}
