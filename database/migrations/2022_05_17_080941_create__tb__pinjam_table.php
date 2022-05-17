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
        Schema::create('_tb__pinjam', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal Pinjam');
            $table->date('Tanggal Kembali');
            $table->date('Tanggal Telat');
            $table->string('Keterangan Denda');
            $table->unsignedBigInteger('_tb__detail__pinjam')->nullable();
            $table->foreign('_tb__detail__pinjam')->references('id')->on('_tb__detail__pinjam')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tb__pinjam');
    }
};
