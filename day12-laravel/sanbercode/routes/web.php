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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/test/{angka}', function ($angka) {
    return view('test', ["angka" => $angka]);  // key => $angka dari function
});

Route::get('/halo/{nama}', function ($nama) {  // route parameter (param diurl)
    return "hallo $nama";
});

Route::get('/', 'HomeController@index');
Route::get('/form', 'AuthController@register');
Route::get('/welcome', 'AuthController@welcome'); // tidak berguna jika ada inputan
Route::post('/welcome', 'AuthController@welcome_post');
