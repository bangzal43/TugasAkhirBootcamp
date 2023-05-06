<?php
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::post('/postlogin','LoginController@postlogin')->name('postlogin');

Route::get('/logout','LoginController@logout')->name('logout');

Route::get('dashboard', function () {
    return view('dashboard');
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
//buku
Route::resource('buku', 'BukuController');
Route::get('/create', 'BukuController@create');
Route::get('/store', 'BukuController@store');
Route::get('/cetakbuku', [BukuController::class, 'cetakbuku'])->name('cetakbuku');
//kategori
Route::resource('kategori', 'KategoriController');
Route::get('/create', 'KategoriController@create');
Route::post('/store', 'KategoriController@store');
//pengembalian
Route::get('/pengembalian', 'PengembalianController@index');
Route::get('/createpengembalian', 'PengembalianController@create');
Route::post('/store', 'PengembalianController@store');
//peminjaman
Route::resource('peminjaman', 'PeminjamanController');
Route::get('/create', 'PeminjamanController@create');
Route::post('/store', 'PeminjamanController@store');
//mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/createmahasiswa', 'MahasiswaController@create');
Route::post('/store', 'MahasiswaController@store');
//petugas
Route::get('/petugas', 'PetugasController@index');
Route::get('/createpetugas', 'PetugasController@create');
Route::post('/store', 'PetugasController@store');

Route::post('/login', 'LoginController@index')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
