<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $table="like";

    protected $fillable = [
        'id_jasa_service','id_pelanggan',
    ];

    public function pelanggan(){
        return $this->belongsTo('App\User','id_pelanggan');
    }
}