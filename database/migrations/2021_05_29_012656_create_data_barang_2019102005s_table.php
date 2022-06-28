<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarang2019102005sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barang_2019102005', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->integer('user_id')->unsigned();
            $table->string('kode_barang');
            $table->string('jenis_barang');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('foto')->nullable();//banner produknya
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_barang')->references('id')->on('data_barang_2019102005');
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
        Schema::dropIfExists('data_barang_2019102005');
    }
}
