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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/', function () {
    return view('items.index');
});

Route::get('/data-tables', function () {
    return view('items.create');
});

//------------------------------------------------------------ day 15 ------------------------------
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show'); //{id}=>tidak harus {id} bebas, hanya sebatas parameter || nama tidak harus sama dengan yang dicontroller
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
