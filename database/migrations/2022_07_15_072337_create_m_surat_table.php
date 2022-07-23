<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_surat', function (Blueprint $table) {
            $table->string('kode', 10)->primary();
            $table->text('keterangan')->nullable();
            $table->string('creator', 32)->nullable();
            $table->timestamp('created')->nullable();
            $table->string('editor', 32)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('kode_template', 10)->nullable();
            $table->string('kode_signer', 10)->nullable();
            $table->string('kode_number', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_surat');
    }
}
