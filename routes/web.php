<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
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

Route::get('/daftar-barang', [BarangController::class, 'index'])->name('barang');
Route::post('/daftar-barang/baru', [BarangController::class, 'tambah']);
// Route::get('/daftar-barang/edit/{barang}', [BarangController::class, 'edit']);
Route::post('/daftar-barang/edit', [BarangController::class, 'editBarang']);
// Route::get('/daftar-barang/hapus/{barang}', [BarangController::class, 'hapus']);
Route::post('/daftar-barang/hapus', [BarangController::class, 'hapusBarang']);
Route::get('/daftar-barang/restore/{product_id}', [BarangController::class, 'restore']);
Route::get('/daftar-barang/deleted', [BarangController::class, 'deleted']);

Route::get('/kategori-barang', [KategoriController::class, 'index']);
Route::post('/kategori-barang/tambah', [KategoriController::class, 'tambah']);
// Route::get('/kategori-barang/edit/{category}', [KategoriController::class, 'edit']);
Route::post('/kategori-barang/edit', [KategoriController::class, 'editJadi']);
// Route::get('/kategori-barang/hapus/{category}', [KategoriController::class, 'hapus']);
Route::post('/kategori-barang/hapus', [KategoriController::class, 'hapusJadi']);
Route::get('/kategori-barang/restore/{category_id}', [KategoriController::class, 'restore']);
Route::get('/kategori-barang/deleted', [KategoriController::class, 'deleted']);

Route::get('/data-pegawai', [PegawaiController::class, 'index']);
// Route::get('/data-pegawai/hapus/{user}', [PegawaiController::class, 'hapus']);
Route::post('/data-pegawai/detail', [PegawaiController::class, 'detailJadi']);
Route::post('/data-pegawai/hapus', [PegawaiController::class, 'hapusJadi']);
Route::get('/data-pegawai/restore/{user_id}', [PegawaiController::class, 'restore']);
Route::get('/data-pegawai/deleted', [PegawaiController::class, 'deleted']);


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
