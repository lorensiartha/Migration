<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tb__pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('Password');
            $table->integer('NIP')->deafult;
            $table->string('Nama');
            $table->string('Jabatan');
            $table->string('Level');
            $table->unsignedBigInteger('_tb__siswa')->nullable();
            $table->foreign('_tb__siswa')->references('id')->on('_tb__siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tb__pegawai');
    }
};
