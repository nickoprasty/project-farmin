<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\HargaPasarController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
Route::get('/user_dashboard', [DashboardController::class, 'user'])->name('user_dashboard');

Route::get('/menuBeli', [PupukController::class, 'index'])->name('menuBeli');
Route::get('/form_pembelian', [PupukController::class, 'formPembelian'])->name('form_pembelian');
Route::post('/proses_pembelian', [PupukController::class, 'prosesPembelian'])->name('proses_pembelian');

Route::resource('item', ItemController::class);

Route::get('/data_transaksi', [TransaksiController::class, 'dataTransaksi'])->name('data_transaksi');
Route::get('/history', [TransaksiController::class, 'history'])->name('history');

Route::get('/harga-pasar', [HargaPasarController::class, 'index'])->name('harga_pasar');

Route::resource('pupuk', PupukController::class);

Route::resource('produk', ProdukController::class);
