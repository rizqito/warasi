<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Like extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jasa_service')->index()->unsigned();
            $table->integer('id_pelanggan')->index()->unsigned();
            $table->timestamps();
            $table->foreign('id_jasa_service')->references('id')->on('jasa_service')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('like');
    }
}
