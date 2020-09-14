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

Route::get('/', 'ResepController_copy@index');
Route::get('/resep/create', 'ResepController_copy@Create');
Route::post('/resep', 'ResepController_copy@Store');
Route::get('/resep', 'ResepController_copy@Tampilkan');
Route::get('/resep/{id}', 'ResepController_copy@Detail');
Route::get('/resep/{id}/edit', 'ResepController_copy@Edit');
Route::put('/resep/{id}', 'ResepController_copy@Update');
Route::delete('/resep/{id}', 'ResepController_copy@Destroy');
