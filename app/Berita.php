<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public $table="berita";

    protected $fillable = [
        'judul','foto','deskripsi'
    ];
}