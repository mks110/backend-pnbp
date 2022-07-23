<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMWajibBayarPkhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_wajib_bayar_pkh', function (Blueprint $table) {
            $table->string('kode_wajib_bayar', 20)->primary();
            $table->string('kode_user');
            $table->string('pemegang_ijin_ppkh');
            $table->string('provinsi', 16);
            $table->string('kabupaten_1_1', 16)->nullable();
            $table->string('kabupaten_1_2', 16)->nullable();
            $table->string('provinsi_2', 16)->nullable();
            $table->string('kabupaten_2_1', 16)->nullable();
            $table->string('kabupaten_2_2', 16)->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('telp_fax_kantor')->nullable();
            $table->string('alamat_site')->nullable();
            $table->string('telp_fax_site')->nullable();
            $table->string('no_perjanjian')->nullable();
            $table->text('no_sk_ippkh')->nullable();
            $table->text('nosk_baru')->nullable();
            $table->string('kode_skbaru', 512)->nullable();
            $table->date('tanggal_sk')->nullable();
            $table->float('luas_areal', 0, 0)->nullable();
            $table->smallInteger('masa_berlaku')->nullable();
            $table->string('fungsi_hutan', 32)->nullable();
            $table->float('luas_hp', 0, 0)->nullable();
            $table->float('luas_hl', 0, 0)->nullable();
            $table->string('penggunaan')->nullable();
            $table->string('jenis', 64)->nullable();
            $table->string('kategori', 16)->nullable();
            $table->string('contact_person')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->date('tanggal_berlaku_sk')->nullable();
            $table->date('tanggal_berakhir_sk')->nullable();
            $table->string('jenis_ijin', 32)->nullable();
            $table->string('npwp', 50)->nullable();
            $table->string('catgry', 30)->nullable();
            $table->string('catgryno', 35)->nullable();
            $table->date('catgrydate')->nullable();
            $table->float('luas_areal_tata_batas', 0, 0)->nullable();
            $table->float('luas_hp_tb', 0, 0)->nullable();
            $table->float('luas_hl_tb', 0, 0)->nullable();
            $table->text('no_sk_pak')->nullable();
            $table->date('tanggal_berlaku_sk_pak')->nullable();
            $table->date('tanggal_berakhir_sk_pak')->nullable();
            $table->date('tanggal_awal_jatuh_tempo')->nullable();
            $table->date('tanggal_akhir_jatuh_tempo')->nullable();
            $table->string('kode_ippkh', 32)->nullable();
            $table->smallInteger('status_aktivasi')->nullable();
            $table->text('anly01')->nullable();
            $table->text('anly02')->nullable();
            $table->text('anly03')->nullable();
            $table->text('anly04')->nullable();
            $table->text('anly05')->nullable();
            $table->timestamp('created')->nullable();
            $table->string('creator', 16)->nullable();
            $table->timestamp('edited')->nullable();
            $table->string('editor', 16)->nullable();
            $table->integer('status_kompensasi')->nullable();
            $table->integer('status_se4_2019')->nullable()->default(0);
            $table->string('keterangan_se4', 256)->nullable();
            $table->char('kdkabkota', 2)->nullable();
            $table->char('kdlokasi', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_wajib_bayar_pkh');
    }
}
