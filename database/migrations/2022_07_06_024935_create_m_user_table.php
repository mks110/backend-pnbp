<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->string('kode_user', 64)->primary();
            $table->string('nama_user', 132)->nullable();
            $table->string('pass', 45)->nullable();
            $table->string('kode_prodi', 16)->nullable();
            $table->string('kode_tipe_user', 16)->nullable();
            $table->string('place_of_birth', 32)->nullable();
            $table->timestamp('date_of_birth', 6)->nullable();
            $table->string('alamat', 256)->nullable();
            $table->string('id_kelurahan', 256)->nullable();
            $table->string('hp', 132)->nullable();
            $table->string('religion', 20)->nullable();
            $table->string('sex', 16)->nullable();
            $table->string('email', 132)->nullable();
            $table->timestamp('last_login', 6)->nullable();
            $table->smallInteger('status')->nullable();
            $table->string('picture', 64)->nullable();
            $table->string('keterangan', 512)->nullable();
            $table->timestamp('created', 6)->nullable()->useCurrent();
            $table->string('creator', 64)->nullable()->default('sys');
            $table->timestamp('edited', 6)->nullable();
            $table->string('editor', 64)->nullable();
            $table->string('last_ip', 128)->nullable();
            $table->string('user_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_user');
    }
}
