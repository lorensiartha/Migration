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
        Schema::create('_tb__buku', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Pengarang');
            $table->string('Status Buku');
            $table->string('Foto Buku');
            $table->unsignedBigInteger('_tb__rak')->nullable();
            $table->foreign('_tb__rak')->references('id')->on('_tb__rak')->onDelete('cascade');
            $table->unsignedBigInteger('_tb__siswa')->nullable();
            $table->foreign('_tb__siswa')->references('id')->on('_tb__siswa')->onDelete('cascade');
            $table->unsignedBigInteger('_tb__pegawai')->nullable();
            $table->foreign('_tb__pegawai')->references('id')->on('_tb__pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tb__buku');
    }
};
