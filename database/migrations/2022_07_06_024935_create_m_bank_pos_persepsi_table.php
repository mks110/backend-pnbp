<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMBankPosPersepsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_bank_pos_persepsi', function (Blueprint $table) {
            $table->integer('no')->primary();
            $table->string('bank_pos_persepsi')->nullable();
            $table->float('kode_kppn', 0, 0)->nullable();
            $table->string('nama_kppn')->nullable();
            $table->string('kode_bank')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_bank_pos_persepsi');
    }
}
