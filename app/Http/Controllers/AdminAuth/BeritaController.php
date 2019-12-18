<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
		$berita=Berita::all();
        return view('admin.berita.index',compact('berita'));
	}

	public function create(){
        return view('admin.berita.create');
	}

	public function store(Request $request){    	
        Berita::create([
            'judul' => request('judul'),
            'foto' => '',
            'deskripsi' => request('deskripsi')
        ]);
        return redirect()->route('admin.berita')->with('success','Berhasil Simpan Data berita.');
    }

    public function edit($id){
    	$berita=Berita::find($id);
        return view('admin.berita.update',compact('berita'));
    }

    public function update(Request $request, $id){
        $berita=Berita::find($id);
        $berita->update([
            'judul' => request('judul'),
            'foto' => '',
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('admin.berita')->with('success','Berhasil Ubah Data berita.');
    }

    public function destroy($id){
        $berita=Berita::find($id);
        $berita->delete();
        return redirect()->route('admin.berita')->with('success','Berhasil Hapus Data berita.');
    }
}