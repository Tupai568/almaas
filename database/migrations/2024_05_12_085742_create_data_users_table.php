<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('alamat_rumah');
            $table->string('tempat_lahir');
            $table->integer('usia');
            $table->string('gender');
            $table->string('tahap');
            $table->string('whatsapp');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('program');
            $table->string('foto')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_kk')->nullable();
            $table->unsignedBigInteger('bimbingan_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bimbingan_id')->references('id')->on('bimbingans');
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_users');
    }
}
