<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/crud', 'App\Http\Controllers\CrudController@index');
Route::get('/pelanggan/tambah', 'App\Http\Controllers\CrudController@tambah');
Route::get('/pelanggan/store', 'App\Http\Controllers\CrudController@store');
Route::get('/pelanggan/edit/{id}', 'App\Http\Controllers\CrudController@edit');
Route::put('/pelanggan/update/{id}', 'App\Http\Controllers\CrudController@update');
Route::get('/pelanggan/hapus/{id}', 'App\Http\Controllers\CrudController@delete');