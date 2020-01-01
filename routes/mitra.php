<?php

Route::get('/', 'MitraAuth\HomeController@index')->name('home');
Route::get('/home', 'MitraAuth\HomeController@index')->name('home');
Route::get('/servicemu', 'MitraAuth\JasaServiceController@index')->name('service');
Route::get('/servicemu/create', 'MitraAuth\JasaServiceController@create')->name('service.create');
Route::post('/service/store', 'MitraAuth\JasaServiceController@store')->name('service.store');
Route::patch('/service/{id}/publikasi', 'MitraAuth\JasaServiceController@publikasi')->name('service.publikasi');
Route::get('/mitra/{id}/edit', 'MitraAuth\JasaServiceController@edit')->name('service.edit');
Route::patch('/mitra/{id}/update', 'MitraAuth\JasaServiceController@update')->name('service.update');
Route::delete('/mitra/{id}/destroy','MitraAuth\JasaServiceController@destroy')->name('service.destroy');

Route::get('/galeri-service', 'MitraAuth\GaleriController@index')->name('galeriService');
Route::get('/galeri-service/create', 'MitraAuth\GaleriController@create')->name('galeriService.create');
Route::post('/galeri-service/store', 'MitraAuth\GaleriController@store')->name('galeriService.store');
Route::delete('/galeri-service/{id}/destroy','MitraAuth\GaleriController@destroy')->name('galeriService.destroy');

Route::get('/jam-operasi', 'MitraAuth\JamOperasiController@index')->name('jamOperasi');
Route::get('/jam-operasi/create', 'MitraAuth\JamOperasiController@create')->name('jamOperasi.create');
Route::post('/jam-operasi/store', 'MitraAuth\JamOperasiController@store')->name('jamOperasi.store');
Route::get('/jam-operasi/{id}/edit', 'MitraAuth\JamOperasiController@edit')->name('jamOperasi.edit');
Route::patch('/jam-operasi/{id}/update', 'MitraAuth\JamOperasiController@update')->name('jamOperasi.update');

Route::get('/profil', 'MitraAuth\ProfilController@index')->name('profil');
Route::patch('/profil/{id}/update', 'MitraAuth\ProfilController@update')->name('profil.update');

Route::get('/ubah-password', 'MitraAuth\ProfilController@password')->name('password');
Route::patch('/ubah-password/{id}/update', 'MitraAuth\ProfilController@updatePassword')->name('password.update');