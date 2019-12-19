<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    public $table="teknisi";

    protected $fillable = [
        'id_jasa_service','nama','no_telp'
    ];
}