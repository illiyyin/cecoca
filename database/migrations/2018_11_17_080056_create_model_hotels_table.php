<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hotel');
            $table->string('nama_hotel');//membuat kolom nama
            $table->text('file');
            $table->integer('harga_hotel');
            $table->enum('fasilitas_hotel',["breakfast","wifi","laundry"]);
            $table->enum('bintang_hotel',["1","2","3","4","5"]);//membuat kolomnohp
            $table->string('kota_hotel');//me
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
        Schema::dropIfExists('hotel');
    }
}
