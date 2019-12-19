<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mitra;

class MitraController extends Controller
{
    public function index(){
    	$mitra=Mitra::all();
        return view('admin.mitra.index',compact('mitra'));
    }

	// public function store(Request $request){    	
 //        Teknisi::create([
 //            'id_jasa_service' => request('id_mitra'),
 //            'nama' => request('nama'),
 //            'no_telp' => request('no_telp')
 //        ]);
 //        return redirect()->route('admin.teknisi')->with('success','Berhasil Simpan Data Teknisi.');
 //    }

 //    public function edit($id){
 //    	$teknisi=Teknisi::find($id);
 //        $mitra=Mitra::all();
 //        return view('admin.teknisi.update',compact('teknisi','mitra'));
 //    }

 //    public function update(Request $request, $id){
 //        $teknisi=Teknisi::find($id);
 //        $teknisi->update([
 //            'id_jasa_service' => request('id_mitra'),
 //            'nama' => request('nama'),
 //            'no_telp' => request('no_telp')
 //        ]);

 //        return redirect()->route('admin.teknisi')->with('success','Berhasil Ubah Data Teknisi.');
 //    }

 //    public function destroy($id){
 //        $teknisi=Teknisi::find($id);
 //        $teknisi->delete();
 //        return redirect()->route('admin.teknisi')->with('success','Berhasil Hapus Data Teknisi.');
 //    }
}