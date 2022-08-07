<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user', 100);
            $table->string('alamat_user', 150);
            $table->string('telp_user', 13);
            $table->string('username_user', 50)->unique();
            $table->string('password');
            $table->timestamps();
        });
        
    
        Schema::table('users', function (Blueprint $table) {
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
        Schema::dropIfExists('users');
    }
}
