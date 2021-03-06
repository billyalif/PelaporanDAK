<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelSubbidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_subbidang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_subbidang', 100);
            $table->timestamps();
        });

        Schema::table('tabel_subbidang', function (Blueprint $table) {
            $table->foreignId('id_bidang')->constrained('tabel_bidang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_subbidang');
    }
}
