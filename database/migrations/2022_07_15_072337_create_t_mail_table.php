<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_mail', function (Blueprint $table) {
            $table->bigInteger('idx', true);
            $table->string('kode_wajib_bayar', 20);
            $table->string('jenis_surat')->nullable();
            $table->string('kode', 10)->nullable();
            $table->string('nomor_surat');
            $table->date('tgl_surat');
            $table->smallInteger('tahun')->nullable();
            $table->string('perihal')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 50)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 50)->nullable();
            $table->integer('id_mf_mails')->nullable();
            $table->integer('year_mail_mf_mails')->nullable();
            $table->integer('mail_count_mf_mails')->nullable();
            $table->string('status_mf_mails', 10)->nullable();
            $table->text('mf_mails_contents')->nullable();
            $table->text('mf_mails_data')->nullable();
            $table->timestamp('signed_date_mf_mails')->nullable();
            $table->timestamp('sent_date_mf_mails')->nullable();
            $table->text('old_data_mf_mails')->nullable();
            $table->string('anly', 64)->nullable();
            $table->text('anly1')->nullable();
            $table->text('anly2')->nullable();
            $table->text('anly3')->nullable();
            $table->string('no_crash', 32)->nullable();
            $table->string('file_crash', 64)->nullable();
            $table->float('jml_crash', 0, 0)->nullable();
            $table->integer('status_crash')->nullable()->default(0);
            $table->date('tgl_berlaku')->nullable();
            $table->date('berlaku_sd')->nullable();
            $table->string('paraf', 64)->nullable();
            $table->string('penerima')->nullable();
            $table->string('kode_mails_number', 10)->nullable();
            $table->text('email_penerima')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_mail');
    }
}
