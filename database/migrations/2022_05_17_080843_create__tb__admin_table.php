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
        Schema::create('_tb__admin', function (Blueprint $table) {
            $table->id();
            $table->integer('NIP')->deafult(0);
            $table->string('Nama');
            $table->string('Password', 20);
            $table->string('Hak Akses'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tb__admin');
    }
};
