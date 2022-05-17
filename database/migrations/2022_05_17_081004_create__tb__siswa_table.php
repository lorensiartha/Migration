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
        Schema::create('_tb__siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('No Induk');
            $table->string('Nama');
            $table->string('Kelas');
            $table->string('Jurusan');
            $table->string('Status');
            $table->unsignedBigInteger('_tb__pinjam')->nullable();
            $table->foreign('_tb__pinjam')->references('id')->on('_tb__pinjam')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tb__siswa');
    }
};
