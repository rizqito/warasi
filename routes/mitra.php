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
// Route::get('/berita/create', 'AdminAuth\BeritaController@create')->name('berita.create');
// Route::post('/berita/store', 'AdminAuth\BeritaController@store')->name('berita.store');
// Route::get('/berita/{id}/edit', 'AdminAuth\BeritaController@edit')->name('berita.edit');
// Route::patch('/berita/{id}/update', 'AdminAuth\BeritaController@update')->name('berita.update');
// Route::delete('/berita/{id}/destroy','AdminAuth\BeritaController@destroy')->name('berita.destroy');

Route::get('/profil', 'MitraAuth\ProfilController@index')->name('profil');
Route::get('/ubah-password', 'MitraAuth\ProfilController@password')->name('password');