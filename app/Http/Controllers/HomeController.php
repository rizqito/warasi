<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JasaService;
use App\KategoriMitra;
use App\Berita;

class HomeController extends Controller
{
    public function home(){
        $jasaService=JasaService::where('status',1)->limit(10)->get();
    	return view('home',compact('jasaService'));
    }

    public function berita(){
        $berita=Berita::all();
    	return view('berita',compact('berita'));
    }

    public function tentangKami(){
    	return view('tentangKami');
    }

    public function list(){
    	return view('list');
    }

    public function beritaSingle(){
        return view('berita-single');
    }

    public function login(){
        return view('login-mitra');
    }
    public function detail($id){
    	$jasaService=JasaService::find($id);
        return view('detail',compact('jasaService'));
    }
}