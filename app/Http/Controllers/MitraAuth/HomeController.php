<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KategoriMitra;
use App\JasaService;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $id_jasa_service=JasaService::where('id_mitra',Auth::user()->id)->pluck('id')->first();
        $kategori=KategoriMitra::where('id_jasa_service',$id_jasa_service)->count();
        return view('mitra.home',compact('kategori'));
    }
}