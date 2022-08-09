<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan', 100);
            $table->mediumText('deskripsi_kegiatan');
            $table->integer('volume');
            $table->string('satuan', 100);
            $table->integer('jumlah_penerima_manfaat');
            $table->bigInteger('pagu_diterima');
            $table->bigInteger('pagu_dibelanjakan');
            $table->string('metode_pembayaran');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::table('tabel_kegiatan', function (Blueprint $table) {
            $table->foreignId('id_subbidang')->constrained('tabel_subbidang');
            $table->foreignId('id_dak')->constrained('tabel_dak');
            $table->foreignId('id_batch')->constrained('tabel_batch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_kegiatan');
    }
}
