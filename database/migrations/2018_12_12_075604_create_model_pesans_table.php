<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pesanan');

            $table->integer('id_hotel');
            $table->integer('id_user');
            $table->integer('id_penyedia');
            $table->string('nama_pemesan');
            $table->string('email_pemesan');
            $table->integer('nohp_pemesan');
            $table->string('hotel_pesanan');
            $table->enum('penyedia_pesanan',["traveloka","airy","redDoor"]);
            $table->date('checkin');
            $table->date('checkout');
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
        Schema::dropIfExists('pesan');
    }
}
