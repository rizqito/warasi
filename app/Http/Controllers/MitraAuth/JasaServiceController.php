<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JasaService;
use App\KategoriJasa;
use App\KategoriMitra;
use Auth;

class JasaServiceController extends Controller
{
    public function index(){
        $jasaService=JasaService::where('id_mitra',Auth::user()->id)->get();
        $idJasaService=JasaService::where('id_mitra',Auth::user()->id)->first();
        return view('mitra.jasaService.index',compact('jasaService','idJasaService'));
    }
    public function create(){    	
        $kategori=KategoriJasa::all();
        return view('mitra.jasaService.create',compact('kategori'));
    }
    public function store(Request $request){
        if (request('foto')=='') {
            $file = '';
        }else{
            $file = request()->foto->getClientOriginalName();
            $request->foto->storeAs('JasaService',$file);        
        }
        $kategori = request('kategori');
        JasaService::create([
            'id_mitra' => Auth::user()->id,
            'nama_jasa'=>request('nama_jasa'),
            'email'=>request('email'),
            'no_telp'=>request('no_telp'),
            'alamat'=>request('alamat'),
            'foto' => $file,
            'deskripsi' => request('deskripsi'),
            'status' => 0
        ]);
        $idJasaService=JasaService::orderBy('id','desc')->first();
        foreach($kategori as $k){
            KategoriMitra::create([
                'id_jasa_service' => $idJasaService->id,
                'id_kategori'=>$k
            ]);
        }
        return redirect()->route('mitra.service')->with('success','Berhasil Simpan Data Servicemu.');
    }
    public function publikasi(Request $request, $id){
        $jasaService=JasaService::find($id);
        $jasaService->update([
            'status' => 1
        ]);
        return redirect()->route('mitra.service')->with('success','Berhasil Ubah Mengaktifkan Jasa Servicemu    .');
    }
    public function edit($id){
        $jasaService=JasaService::find($id);
        $kategori=KategoriJasa::all();
        return view('mitra.jasaService.update',compact('jasaService','kategori'));
    }
    public function update(Request $request, $id){
        $jasaService=JasaService::find($id);
        if (request('foto')=='') {
            $file = '';
        }else{
            $file = request()->foto->getClientOriginalName();
            $request->foto->storeAs('JasaService',$file);        
        }
        $jasaService->update([
            'id_mitra' => Auth::user()->id,
            'nama_jasa'=>request('nama_jasa'),
            'email'=>request('email'),
            'no_telp'=>request('no_telp'),
            'alamat'=>request('alamat'),
            'foto' => $file,
            'deskripsi' => request('deskripsi')
        ]);
        return redirect()->route('mitra.service')->with('success','Berhasil Ubah Data jasaService.');
    }
    public function destroy($id){
        $jasaService=JasaService::find($id);
        $jasaService->delete();
        return redirect()->route('mitra.service')->with('success','Berhasil Hapus Data jasa Service.');
    }
}