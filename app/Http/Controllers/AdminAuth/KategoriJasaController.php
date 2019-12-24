<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KategoriJasa;
use App\Mitra;

class KategoriJasaController extends Controller
{
	public function index(){
		$kategoriJasa=kategoriJasa::all();
        return view('admin.kategoriJasa.index',compact('kategoriJasa'));
	}

	public function create(){
		$mitra=Mitra::all();
        return view('admin.kategoriJasa.create',compact('mitra'));
	}

	public function store(Request $request){    	
        KategoriJasa::create([
            'kategori' => request('kategori')
        ]);
        return redirect()->route('admin.kategoriJasa')->with('success','Berhasil Tambah Kategori Jasa.');
    }

    public function edit($id){
    	$kategoriJasa=KategoriJasa::find($id);
        $mitra=Mitra::all();
        return view('admin.kategoriJasa.update',compact('kategoriJasa','mitra'));
    }

    public function update(Request $request, $id){
        $kategoriJasa=KategoriJasa::find($id);
        $kategoriJasa->update([
            'id_mitra' => request('id_mitra'),
            'kategori' => request('kategori')
        ]);

        return redirect()->route('admin.kategoriJasa')->with('success','Berhasil Ubah Data kategori jasa.');
    }

    public function destroy($id){
        $kategoriJasa=KategoriJasa::find($id);
        $kategoriJasa->delete();
        return redirect()->route('admin.kategoriJasa')->with('success','Berhasil Hapus Data kategori jasa.');
    }
}