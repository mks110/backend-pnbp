<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kabupaten', function (Blueprint $table) {
            $table->string('id_kab', 4)->primary();
            $table->string('id_prov', 2);
            $table->string('nama_kab', 100);
            $table->timestamp('created', 6)->nullable()->useCurrent();
            $table->string('creator', 32)->nullable()->default('sys');
            $table->timestamp('edited', 6)->nullable();
            $table->string('editor', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kabupaten');
    }
}
