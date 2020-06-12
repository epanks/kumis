<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatuslelangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_lelang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_lelang_id')->unsigned();
            $table->date('tanggal');
            $table->string('keterangan', 250);
            $table->unsignedBigInteger('paket_id')->unsigned();
            $table->timestamps();

            $table->foreign('kategori_lelang_id')->references('id')->on('kategori_lelang');
            $table->foreign('paket_id')->references('id')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_kontrak');
    }
}
