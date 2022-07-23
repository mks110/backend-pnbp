<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_provinsi', function (Blueprint $table) {
            $table->string('id_prov', 2);
            $table->string('nama_prov', 100);
            $table->string('id_negara', 5)->nullable();
            $table->timestamp('created', 6)->nullable()->useCurrent();
            $table->string('creator', 64)->nullable()->default('sys');
            $table->timestamp('edited', 6)->nullable();
            $table->string('editor', 64)->nullable();
            $table->string('rayon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_provinsi');
    }
}
