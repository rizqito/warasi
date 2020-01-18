<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PelangganController extends Controller
{
    public function index(){
        return view('admin.pelanggan.index');
    }
}
