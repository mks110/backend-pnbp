<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKabkotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kabkota', function (Blueprint $table) {
            $table->string('kdlokasi', 2);
            $table->string('kdkabkota', 2);
            $table->string('nmkabkota')->nullable();

            $table->primary(['kdlokasi', 'kdkabkota']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_kabkota');
    }
}
