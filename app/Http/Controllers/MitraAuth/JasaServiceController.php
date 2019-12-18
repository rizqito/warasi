<?php

namespace App\Http\Controllers\MitraAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JasaServiceController extends Controller
{
    public function index(){
        return view('mitra.jasaService.index');
    }
}