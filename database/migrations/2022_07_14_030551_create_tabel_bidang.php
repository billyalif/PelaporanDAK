<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelBidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_bidang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidang', 100);
            $table->string('pj_satker', 100);
            $table->timestamps();
        });

        Schema::table('tabel_bidang', function (Blueprint $table) {
            $table->foreignId('id_satker')->constrained('tabel_satker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_bidang');
    }
}
