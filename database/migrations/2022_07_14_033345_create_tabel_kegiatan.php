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
            $table->timestamps();
        });

        Schema::table('tabel_kegiatan', function (Blueprint $table) {
            $table->foreignId('id_anggaran')->constrained('tabel_anggaran');
            $table->foreignId('id_subbidang')->constrained('tabel_subbidang');
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
