<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Galeri;
use App\JasaService;
use Auth;

class GaleriController extends Controller
{
    public function index(){
        $id_jasa_service=JasaService::where('id_mitra',Auth::user()->id)->pluck('id')->first();
        $galeri=galeri::where('id_jasa_service',$id_jasa_service)->get();
        return view('mitra.galeri.index',compact('galeri'));
    }
    public function create(){
        return view('mitra.galeri.create');
    }
    public function store(Request $request){
        if (request('foto')=='') {
            $file = '';
        }else{
            $file = request()->foto->getClientOriginalName();
            $request->foto->storeAs('Galeri',$file);        
        }
        $id_jasa_service=JasaService::where('id_mitra',Auth::user()->id)->pluck('id')->first();
        Galeri::create([
            'id_jasa_service' => $id_jasa_service,
            'foto'=>$file
        ]);
        return redirect()->route('mitra.galeriService')->with('success','Berhasil Simpan Data galeri.');
    }
    public function destroy($id){
        $galeri=Galeri::find($id);
        $galeri->delete();
        return redirect()->route('mitra.galeriService')->with('success','Berhasil Hapus Data jasa Service.');
    }
}