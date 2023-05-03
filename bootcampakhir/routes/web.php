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
    return view('dashboard');
});

Route::get('buku', function () {
    return view('buku');
});

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('peminjaman', function () {
    return view('peminjaman');
});

Route::get('pengembalian', function () {
    return view('pengembalian');
});

Route::get('/buku', 'BukuController@index');
Route::get('/kategori', 'KategoriController@index');