<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PegawaiController;

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

Route::get('/',[DashboardController::class,'index']);

// Route daftar barang
Route::get('/daftar-barang', [BarangController::class, 'index'])->name('barang');
Route::post('/daftar-barang/baru', [BarangController::class, 'tambah']);
Route::post('/daftar-barang/edit', [BarangController::class, 'editBarang']);
Route::post('/daftar-barang/hapus', [BarangController::class, 'hapusBarang']);
Route::get('/daftar-barang/restore/{product_id}', [BarangController::class, 'restore']);
Route::get('/daftar-barang/deleted', [BarangController::class, 'deleted']);

// Route Kategori
Route::get('/kategori-barang', [KategoriController::class, 'index']);
Route::post('/kategori-barang/tambah', [KategoriController::class, 'tambah']);
Route::post('/kategori-barang/edit', [KategoriController::class, 'editJadi']);
Route::post('/kategori-barang/hapus', [KategoriController::class, 'hapusJadi']);
Route::get('/kategori-barang/restore/{category_id}', [KategoriController::class, 'restore']);
Route::get('/kategori-barang/deleted', [KategoriController::class, 'deleted']);

// Route Pegawai
Route::get('/data-pegawai', [PegawaiController::class, 'index']);
Route::post('/data-pegawai/detail', [PegawaiController::class, 'detailJadi']);
Route::post('/data-pegawai/hapus', [PegawaiController::class, 'hapusJadi']);
Route::get('/data-pegawai/restore/{user_id}', [PegawaiController::class, 'restore']);
Route::get('/data-pegawai/deleted', [PegawaiController::class, 'deleted']);

// Route Peminjam
Route::get('/peminjam', [PeminjamanController::class, 'index']);
Route::get('/peminjam/tambah', [PeminjamanController::class, 'tambah']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
