<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JasaService extends Model
{
    public $table="jasa_service";

    protected $fillable = [
        'id_mitra','nama_jasa','email','no_telp','alamat','foto','deskripsi','status'
    ];
}