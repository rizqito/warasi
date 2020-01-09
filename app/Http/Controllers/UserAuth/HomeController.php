<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KategoriMitra;
use App\JasaService;
use Auth;
use App\Berita;
use App\Galeri;
use App\JamOperasi;
use App\KategoriJasa;
use App\Ulasan;

class HomeController extends Controller
{
    public function index(){        
        $ulasan=Ulasan::where('id_pelanggan',Auth::user()->id)->count();
        return view('user.home',compact('kategori','ulasan'));
    }

    public function service(){
        $jasaService=JasaService::where('status',1)->limit(10)->get();
        $kategori=KategoriJasa::all();
        $kat1=KategoriMitra::where('id_kategori',4)->count();
        $kat2=KategoriMitra::where('id_kategori',3)->count();
        $kat3=KategoriMitra::where('id_kategori',5)->count();
        $kat4=KategoriMitra::where('id_kategori',2)->count();
        $kat5=KategoriMitra::where('id_kategori',1)->count();
    	return view('user.service',compact('jasaService','kat1','kat2','kat3','kat4','kat5','kategori'));
    }

    public function kat1(){
        $kat1=KategoriMitra::where('id_kategori',4)->paginate(9);
        return view('user.kat1',compact('kat1'));
    }
    public function kat2(){
        $kat2=KategoriMitra::where('id_kategori',3)->paginate(9);
        return view('user.kat2',compact('kat2'));
    }
    public function kat3(){
        $kat3=KategoriMitra::where('id_kategori',5)->paginate(9);
        return view('user.kat3',compact('kat3'));
    }
    public function kat4(){
        $kat4=KategoriMitra::where('id_kategori',2)->paginate(9);
        return view('user.kat4',compact('kat4'));
    }
    public function kat5(){
        $kat5=KategoriMitra::where('id_kategori',1)->paginate(9);
        return view('user.kat5',compact('kat5'));
    }

    public function detail($id){
        $j=JasaService::find($id);
        $kategori=KategoriMitra::where('id_jasa_service',$id)->get();
        $galeri=Galeri::where('id_jasa_service',$id)->get();
        $jamKerja=JamOperasi::where('id_jasa_service',$id)->get();
        $ulasan=Ulasan::where('id_jasa_service',$id)->orderBy('created_at','desc')->get();
        return view('user.detail',compact('j','kategori','galeri','jamKerja','ulasan'));
    }

    public function storeUlasan(Request $request){    	
        Ulasan::create([
            'id_jasa_service' => request('id_jasa_service'),
            'id_pelanggan' => Auth::user()->id,
            'rating' => request('rating'),
            'komentar' => request('komentar')
        ]);
        return redirect()->back()->with('success','Berhasil Tambah Kategori Jasa.');
    }
}