<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUploadDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_upload_dokumen', function (Blueprint $table) {
            $table->integer('idx', true);
            $table->string('kode_user_wb', 64);
            $table->string('tipe_dokumen', 32);
            $table->text('no_dokumen')->nullable();
            $table->string('file_pdf', 256);
            $table->string('original_file_name', 256);
            $table->timestamp('tgl_terbit', 6)->nullable();
            $table->timestamp('tgl_berakhir', 6)->nullable();
            $table->text('remark')->nullable();
            $table->smallInteger('validity')->default(0);
            $table->float('anly_double', 0, 0)->nullable()->default(0);
            $table->string('anly01', 64)->nullable();
            $table->string('anly02', 64)->nullable();
            $table->string('anly03', 64)->nullable();
            $table->timestamp('created', 6)->nullable()->useCurrent();
            $table->string('creator', 32)->nullable()->default('sys');
            $table->timestamp('edited', 6)->nullable();
            $table->string('editor', 32)->nullable();
            $table->date('tgl_terbit_sk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_upload_dokumen');
    }
}
