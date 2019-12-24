<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriJasa extends Model
{
    public $table="kategori";

    protected $fillable = [
        'kategori'
    ];
}