<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelSatker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_satker', function (Blueprint $table) {
            $table->id();
            $table->string('nama_satker', 100);
            $table->string('alamat_satker', 150);
            $table->string('notelp_satker', 13);
            $table->string('pj_satker', 100);
            $table->timestamps();
        });

        Schema::table('tabel_satker', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('tabel_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_satker');
    }
}
