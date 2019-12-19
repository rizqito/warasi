<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index(){
        return view('mitra.profil.index');
    }

    public function password(){
        return view('mitra.password.index');
    }
}