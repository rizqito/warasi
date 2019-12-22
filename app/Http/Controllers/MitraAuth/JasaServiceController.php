<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JasaService;
use Auth;

class JasaServiceController extends Controller
{
    public function index(){
    	$jasaService=JasaService::where('id_mitra',Auth::user()->id)->get();
        return view('mitra.jasaService.index',compact('jasaService'));
    }
}