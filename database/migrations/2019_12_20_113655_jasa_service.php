<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JasaService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mitra')->index()->unsigned();
            $table->string('nama_jasa',50);
            $table->string('email',50);
            $table->string('no_telp',15);
            $table->string('alamat',150);
            $table->string('foto',100)->nullable();
            $table->text('deskripsi');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('id_mitra')->references('id')->on('mitras')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jasa_service');
    }
}
