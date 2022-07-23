<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelKabkotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_kabkota', function (Blueprint $table) {
            $table->string('id_kab', 4);
            $table->string('id_prov', 2);
            $table->string('nama_kabkota')->nullable();
            $table->string('kdlokasi_simponi', 2)->nullable();
            $table->string('kdkabkota_simponi', 2)->nullable();

            $table->primary(['id_kab', 'id_prov']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_kabkota');
    }
}
