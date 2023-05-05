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

Route::get('/login', function () {
    return view('login');
});

Route::get('dashboard', function () {
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

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('petugas', function () {
    return view('petugas');
});

Route::get('/buku', 'BukuController@index');
Route::get('/kategori', 'KategoriController@index');
Route::get('/pengembalian', 'PengembalianController@index');
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/petugas', 'PetugasController@index');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');