<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home')->name('home');
Route::get('/berita', 'HomeController@berita')->name('berita');
Route::get('/detail-berita', 'HomeController@detailBerita')->name('detail-berita');
Route::get('/tentang-kami', 'HomeController@tentangKami')->name('tentangKami');
Route::get('/list', 'HomeController@list')->name('list');
Route::get('/login','HomeController@login')->name('login');
Route::get('/jasa/{id}/detail', 'HomeController@detail')->name('detail');
Route::get('/berita/{id}/view', 'HomeController@detailBerita')->name('berita.detail');
Route::get('/jasa/tv-lcd-proyektor', 'HomeController@kat1')->name('kat1');
Route::get('/jasa/kulkas-frezer', 'HomeController@kat2')->name('kat2');
Route::get('/jasa/mesin-cuci', 'HomeController@kat3')->name('kat3');
Route::get('/jasa/komputer', 'HomeController@kat4')->name('kat4');
Route::get('/jasa/handphone', 'HomeController@kat5')->name('kat5');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'user'], function () {
  Route::get('/login', 'UserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'UserAuth\LoginController@login');
  Route::post('/logout', 'UserAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'UserAuth\RegisterController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'mitra'], function () {
  Route::get('/login', 'MitraAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MitraAuth\LoginController@login');
  Route::post('/logout', 'MitraAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MitraAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MitraAuth\RegisterController@register');

  Route::post('/password/email', 'MitraAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MitraAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MitraAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MitraAuth\ResetPasswordController@showResetForm');
});
