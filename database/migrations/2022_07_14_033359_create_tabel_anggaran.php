<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelAnggaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_anggaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_anggaran',150);
            $table->integer('volume');
            $table->string('satuan', 100);
            $table->bigInteger('harga_satuan');
            $table->integer('jumlah_penerima_manfaat');
            $table->bigInteger('pagu_diterima');
            $table->bigInteger('pagu_dibelanjakan');
        });

        Schema::table('tabel_anggaran', function (Blueprint $table) {
            $table->foreignId('id_dak')->constrained('tabel_dak');
            $table->foreignId('id_batch')->constrained('tabel_batch');
            $table->foreignId('id_kegiatan')->constrained('tabel_kegiatan');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_anggaran');
    }
}
