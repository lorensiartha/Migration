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
        Schema::create('_tb__detail__pinjam', function (Blueprint $table) {
            $table->id();
            $table->integer('No Detail Pinjam')->deafult;
            $table->integer('No Siswa')->deafult;
            $table->unsignedBigInteger('_tb__admin')->nullable();
            $table->foreign('_tb__admin')->references('id')->on('_tb__admin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tb__detail__pinjam');
    }
};
