<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teknisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teknisi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jasa_service')->index()->unsigned();
            $table->string('nama',50);
            $table->string('no_telp',15);
            $table->timestamps();
            $table->foreign('id_jasa_service')->references('id')->on('jasa_service')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teknisi');
    }
}
