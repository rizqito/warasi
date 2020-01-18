<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    public $table="galeri";

    protected $fillable = [
        'id_jasa_service','foto'
    ];    
}