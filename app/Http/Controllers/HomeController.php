<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JasaService;
use App\KategoriMitra;
use App\Berita;
use App\Galeri;
use App\JamOperasi;
use App\KategoriJasa;

class HomeController extends Controller
{
    public function home(){
        $jasaService=JasaService::where('status',1)->limit(10)->get();
        $kategori=KategoriJasa::all();
        $kat1=KategoriMitra::where('id_kategori',4)->count();
        $kat2=KategoriMitra::where('id_kategori',3)->count();
        $kat3=KategoriMitra::where('id_kategori',5)->count();
        $kat4=KategoriMitra::where('id_kategori',2)->count();
        $kat5=KategoriMitra::where('id_kategori',1)->count();
    	return view('home',compact('jasaService','kat1','kat2','kat3','kat4','kat5','kategori'));
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

    public function kat1(){
        $kat1=KategoriMitra::where('id_kategori',4)->paginate(9);
        return view('kat1',compact('kat1'));
    }
    public function kat2(){
        $kat2=KategoriMitra::where('id_kategori',3)->paginate(9);
        return view('kat2',compact('kat2'));
    }
    public function kat3(){
        $kat3=KategoriMitra::where('id_kategori',5)->paginate(9);
        return view('kat3',compact('kat3'));
    }
    public function kat4(){
        $kat4=KategoriMitra::where('id_kategori',2)->paginate(9);
        return view('kat4',compact('kat4'));
    }
    public function kat5(){
        $kat5=KategoriMitra::where('id_kategori',1)->paginate(9);
        return view('kat5',compact('kat5'));
    }
}