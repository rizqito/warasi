<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamOperasi extends Model
{
    public $table="jam_kerja";

    protected $fillable = [
        'id_jasa_service','hari', 'jam_buka', 'jam_tutup'
    ];    
}