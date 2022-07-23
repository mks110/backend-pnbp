<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMailCorrectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_mail_corrector', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('kode_creator', 16)->nullable();
            $table->string('kode_corrector', 16)->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 64)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_mail_corrector');
    }
}
