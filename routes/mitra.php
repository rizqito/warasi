<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('mitra')->user();

    //dd($users);

    return view('mitra.home');
})->name('home');

Route::get('/', function () {return view('mitra.home');})->name('home');
Route::get('/servicemu', 'MitraAuth\JasaServiceController@index')->name('service');
Route::get('/servicemu/create', 'MitraAuth\JasaServiceController@create')->name('service.create');
Route::post('/service/store', 'MitraAuth\JasaServiceController@store')->name('service.store');
Route::patch('/service/{id}/publikasi', 'MitraAuth\JasaServiceController@publikasi')->name('service.publikasi');
Route::get('/mitra/{id}/edit', 'MitraAuth\JasaServiceController@edit')->name('service.edit');
Route::patch('/mitra/{id}/update', 'MitraAuth\JasaServiceController@update')->name('service.update');
Route::delete('/mitra/{id}/destroy','MitraAuth\JasaServiceController@destroy')->name('service.destroy');

Route::get('/profil', 'MitraAuth\ProfilController@index')->name('profil');
Route::get('/ubah-password', 'MitraAuth\ProfilController@password')->name('password');		