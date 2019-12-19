<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KategoriJasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_jasa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mitra')->index()->unsigned();
            $table->string('kategori',35);
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
        Schema::drop('kategori_jasa');
    }
}
