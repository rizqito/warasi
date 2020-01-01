<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JasaService;
use App\KategoriMitra;
use App\Berita;
use App\Galeri;
use App\JamOperasi;

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
        $j=JasaService::find($id);
        $kategori=KategoriMitra::where('id_jasa_service',$id)->get();
        $galeri=Galeri::where('id_jasa_service',$id)->get();
        $jamKerja=JamOperasi::where('id_jasa_service',$id)->get();
        return view('detail',compact('j','kategori','galeri','jamKerja'));
    }
}