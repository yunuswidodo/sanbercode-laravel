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

Route::get('/bismilah', function () {
    return view('welcome');
});

Route::get('/', 'ResepController@index');
Route::get('/resep/create', 'ResepController@Create');
Route::post('/resep', 'ResepController@Store');
Route::get('/resep', 'ResepController@Tampilkan');
Route::get('/resep/{id}', 'ResepController@Detail');
Route::get('/resep/{id}/edit', 'ResepController@Edit');
Route::put('/resep/{id}', 'ResepController@Update');
Route::delete('/resep/{id}', 'ResepController@Destroy');
