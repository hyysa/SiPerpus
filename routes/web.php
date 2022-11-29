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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('beranda');
});
Route::get('/daftar_buku','PerpusController@index');

Route::get('/tambah_buku','PerpusController@create');
Route::post('/tambah_buku','PerpusController@store');

Route::get('/edit_buku/{id}','PerpusController@edit');
Route::post('/update_buku/{id}','PerpusController@update');

Route::get('/hapus_buku/{id}','PerpusController@destroy');

Route::get('/laporan','PerpusController@laporan');
Route::get('/cetak_laporan','PerpusController@cetaklaporan');