<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSignerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_signer', function (Blueprint $table) {
            $table->integer('idx', true);
            $table->char('kode', 10)->nullable();
            $table->string('kode_text')->nullable();
            $table->string('nama')->nullable();
            $table->string('jabatan', 50)->nullable();
            $table->string('nik', 16)->nullable();
            $table->text('passphrase')->nullable();
            $table->string('email')->nullable();
            $table->string('kode_user', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_signer');
    }
}
