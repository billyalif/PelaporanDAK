<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tabel_user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user', 100);
            $table->string('alamat_user', 150);
            $table->string('telp_user', 13);
            $table->string('username_user', 50)->unique();
            $table->string('password_user');
            $table->timestamps();
        });

        Schema::table('tabel_user', function (Blueprint $table) {
            $table->foreignId('id_role')->constrained('tabel_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_user');
    }
}
