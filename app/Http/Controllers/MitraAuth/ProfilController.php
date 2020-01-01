<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mitra;
class ProfilController extends Controller
{
    public function index(){
        return view('mitra.profil.index');
    }

    public function update(Request $request, $id){
        $mitra=Mitra::find($id);
        if (request('foto')=='') {
            $file = '';
        }else{
            $file = request()->foto->getClientOriginalName();
            $request->foto->storeAs('Mitra',$file);        
        }
        $mitra->update([
            'nama'=>request('nama'),
            'email'=>request('email'),
            'no_telp'=>request('no_telp'),
            'foto' => $file
        ]);
        return redirect()->route('mitra.profil')->with('success','Berhasil Ubah Data Profil.');
    }

    public function password(){
        return view('mitra.password.index');
    }
    public function updatePassword(Request $request, $id){
        $this->validate($request, [
            'password' => 'required|string|min:6|different:current_password|confirmed',
        ]);
        $mitra=Mitra::find($id);
        $mitra->update([
            'password'=>bcrypt($request->input('password'))
        ]);
        return redirect()->route('mitra.password')->with('success','Berhasil Ubah Data password.');
    }
}