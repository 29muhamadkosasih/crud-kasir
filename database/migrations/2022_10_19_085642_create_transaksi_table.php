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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->unsignedBigInteger('nama_menus');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->unsignedBigInteger('nama_pegawai');
            $table->timestamps();
            $table->foreign('nama_menus')->references('id')->on('menu');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
