<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JamOperasi;
use App\JasaService;
use Auth;

class JamOperasiController extends Controller
{
    public function index(){
        $id_jasa_service=JasaService::where('id_mitra',Auth::user()->id)->pluck('id')->first();
        $jam=JamOperasi::where('id_jasa_service',$id_jasa_service)->get();
        return view('mitra.jamOperasi.index',compact('jam'));
    }
    public function create(){    	
        return view('mitra.jamOperasi.create');
    }
    public function store(Request $request){
        $id_jasa_service=JasaService::where('id_mitra',Auth::user()->id)->pluck('id')->first();
        JamOperasi::create([
            'id_jasa_service' => $id_jasa_service,
            'hari'=>request('hari'),
            'jam_buka'=>request('jam_buka'),
            'jam_tutup'=>request('jam_tutup')
        ]);
        return redirect()->route('mitra.jamOperasi')->with('success','Berhasil Simpan Data Jam Operasional.');
    }
    public function edit($id){
        $j=JamOperasi::find($id);
        return view('mitra.jamOperasi.update',compact('j'));
    }
    public function update(Request $request, $id){
        $jamOperasi=JamOperasi::find($id);
        $jamOperasi->update([
            'hari'=>request('hari'),
            'jam_buka'=>request('jam_buka'),
            'jam_tutup'=>request('jam_tutup')
        ]);
        return redirect()->route('mitra.jamOperasi')->with('success','Berhasil Ubah Data jam Operasional.');
    }
}