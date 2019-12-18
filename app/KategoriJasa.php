<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriJasa extends Model
{
    public $table="kategori_jasa";

    protected $fillable = [
        'id_mitra','kategori'
    ];
}