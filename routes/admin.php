<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::get('/kategori-jasa', 'AdminAuth\KategoriJasaController@index')->name('kategoriJasa');
Route::get('/kategori-jasa/create', 'AdminAuth\KategoriJasaController@create')->name('kategoriJasa.create');
Route::post('/kategori-jasa/store', 'AdminAuth\KategoriJasaController@store')->name('kategoriJasa.store');
Route::get('/kategori-jasa/{id}/edit', 'AdminAuth\KategoriJasaController@edit')->name('kategoriJasa.edit');
Route::patch('/kategori-jasa/{id}/update', 'AdminAuth\KategoriJasaController@update')->name('kategoriJasa.update');
Route::delete('/kategori-jasa/{id}/destroy','AdminAuth\KategoriJasaController@destroy')->name('kategoriJasa.destroy');

Route::get('/teknisi', 'AdminAuth\TeknisiController@index')->name('teknisi');
Route::get('/teknisi/create', 'AdminAuth\TeknisiController@create')->name('teknisi.create');
Route::post('/teknisi/store', 'AdminAuth\TeknisiController@store')->name('teknisi.store');
Route::get('/teknisi/{id}/edit', 'AdminAuth\TeknisiController@edit')->name('teknisi.edit');
Route::patch('/teknisi/{id}/update', 'AdminAuth\TeknisiController@update')->name('teknisi.update');
Route::delete('/teknisi/{id}/destroy','AdminAuth\TeknisiController@destroy')->name('teknisi.destroy');
// Route::get('/dosen/laporan', 'AdminAuth\KategoriJasaController@laporan')->name('dosen.laporan');
// Route::get('/dosen/{nidn}/detail', 'AdminAuth\KategoriJasaController@detail')->name('dosen.detail');