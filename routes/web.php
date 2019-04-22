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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perpus', 'BukuController@index');
Route::post('/perpus/create', 'BukuController@create');
Route::get('/perpus/{id}/edit', 'BukuController@edit');
Route::post('/perpus/{id}/update', 'BukuController@update');
Route::get('/perpus/{id}/delete', 'BukuController@delete');

