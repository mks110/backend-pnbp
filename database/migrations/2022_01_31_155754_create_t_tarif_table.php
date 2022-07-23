<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTarifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tarif', function (Blueprint $table) {
            $table->string('kdpp', 7);
            $table->string('kdtarif', 6);
            $table->text('turaian')->nullable();
            $table->string('satuan', 60)->nullable();
            $table->decimal('jmltarif', 12, 0)->nullable();
            $table->decimal('psntarif', 20, 0)->nullable();
            $table->string('kdakun', 6)->nullable();
            $table->string('rel_tarif', 60)->nullable();

            $table->primary(['kdpp', 'kdtarif']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_tarif');
    }
}
