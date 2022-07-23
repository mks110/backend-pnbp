<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->string('kategori', 16)->primary();
            $table->string('keterangan')->nullable();
            $table->float('tarif_hp', 0, 0)->nullable();
            $table->float('tarif_hl', 0, 0)->nullable();
            $table->string('no_per', 50)->nullable();
            $table->date('tgl_berl')->nullable();
            $table->string('creator', 20)->nullable();
            $table->timestamp('created')->nullable();
            $table->date('tgl_berk')->nullable();
            $table->string('group', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kategori');
    }
}
