<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMailsNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_mails_number', function (Blueprint $table) {
            $table->integer('idx', true);
            $table->string('kode', 10)->nullable();
            $table->string('kode_text', 50)->nullable();
            $table->text('nomor')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 50)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_mails_number');
    }
}
