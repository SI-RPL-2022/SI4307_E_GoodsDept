<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
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
    return view('homeAdmin');
});
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});

Route::get('/barang', [BarangController::class, "index"]);
Route::get('/barang/create', function () {
    return view('tambahBarang');
});
Route::post('/barang/insert', [BarangController::class, "insertBarang"]);
Route::get('/barang/edit/{id}', [BarangController::class, "editBarang"]);
Route::post('/barang/edit/{id}', [BarangController::class, "updateBarang"]);
Route::get('/barang/delete/{id}', [BarangController::class, "deleteBarang"]);

Route::get('/kasir', [KasirController::class, "index"]);
Route::get('/kasir/create', function () {
    return view('tambahKasir');
});
Route::post('/kasir/insert', [KasirController::class, "insertKasir"]);
Route::get('/kasir/edit/{id}', [KasirController::class, "editKasir"]);
Route::post('/kasir/edit/{id}', [KasirController::class, "updateKasir"]);
Route::get('/kasir/delete/{id}', [KasirController::class, "deleteKasir"]);

Route::get('/login', [LoginController::class, "index"])->middleware('guest');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::get('/logout', [LoginController::class, "logout"]);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile/edit/{id}', [KasirController::class, "editProfile"]);
Route::post('/profile/edit/{id}', [KasirController::class, "updateProfile"]);

Route::get('/transaksi', [TransaksiController::class, "index"]);
Route::get('/transaksi/tambah', [TransaksiController::class, "tambah"]);
Route::post('/transaksi/tambah', [TransaksiController::class, "input"]);
Route::get('/transaksi/delete/{id}', [TransaksiController::class, "delete"]);
Route::get('/transaksi/print', [TransaksiController::class, "print"]);
Route::get('/transaksi/detail/{id}', [TransaksiController::class, "detail"]);
Route::get('/transaksi/batal/{id}', [TransaksiController::class, "batal"]);
