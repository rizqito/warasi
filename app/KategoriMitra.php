<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriMitra extends Model
{
    public $table="kategori_jasa";

    protected $fillable = [
        'id_jasa_service','id_kategori'
    ];
    public function kategori(){
        return $this->belongsTo('App\KategoriJasa','id_kategori');
    }
    public function jasaService(){
        return $this->belongsTo('App\JasaService','id_jasa_service');
    }
}