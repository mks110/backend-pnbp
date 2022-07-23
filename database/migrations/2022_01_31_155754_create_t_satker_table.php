<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSatkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_satker', function (Blueprint $table) {
            $table->string('kddept', 3)->nullable();
            $table->string('kdunit', 2)->nullable();
            $table->string('kdsatker', 6)->nullable();
            $table->text('nmsatker')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_satker');
    }
}
