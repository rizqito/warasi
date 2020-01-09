<?php

Route::get('/', 'UserAuth\HomeController@index')->name('home');
Route::get('/home', 'UserAuth\HomeController@index')->name('home');

Route::get('/profil', 'UserAuth\ProfilController@index')->name('profil');
Route::patch('/profil/{id}/update', 'UserAuth\ProfilController@update')->name('profil.update');

Route::get('/ubah-password', 'UserAuth\ProfilController@password')->name('password');
Route::patch('/ubah-password/{id}/update', 'UserAuth\ProfilController@updatePassword')->name('password.update');

Route::get('/service', 'UserAuth\HomeController@service')->name('service');

Route::get('/jasa/tv-lcd-proyektor', 'UserAuth\HomeController@kat1')->name('kat1');
Route::get('/jasa/kulkas-frezer', 'UserAuth\HomeController@kat2')->name('kat2');
Route::get('/jasa/mesin-cuci', 'UserAuth\HomeController@kat3')->name('kat3');
Route::get('/jasa/komputer', 'UserAuth\HomeController@kat4')->name('kat4');
Route::get('/jasa/handphone', 'UserAuth\HomeController@kat5')->name('kat5');

Route::get('/jasa/{id}/detail', 'UserAuth\HomeController@detail')->name('detail');

Route::post('/ulasan/store', 'UserAuth\HomeController@storeUlasan')->name('ulasan.store');