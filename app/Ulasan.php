<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    public $table="ulasan";

    protected $fillable = [
        'id_jasa_service','id_pelanggan','rating','komentar'
    ];

    public function pelanggan(){
        return $this->belongsTo('App\User','id_pelanggan');
    }
}