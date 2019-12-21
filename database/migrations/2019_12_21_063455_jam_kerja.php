<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JamKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_kerja', function (Blueprint $table) {
            $table->integer('id_jasa_service')->index()->unsigned();
            $table->string('hari',10);
            $table->time('jam_buka');
            $table->time('jam_tutup');
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
        Schema::drop('jam_kerja');
    }
}
