<?php

use App\Http\Controllers\TampilanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;
use App\Models\KategoriProduk;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::group(['middleware' => ['auth', 'peran:admin-pelanggan']], function(){
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::get('/produk/{id}', [ProdukController::class, 'show']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::get('/pesanan/{id}', [PesananController::class, 'show']);
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

    Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);

    Route::get('/kategoriproduk/create', [KategoriProdukController::class, 'create']);
    Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);
    Route::get('/kategoriproduk/edit/{id}', [KategoriProdukController::class, 'edit']);
    Route::put('/kategoriproduk/update/{id}', [KategoriProdukController::class, 'update']);
    Route::get('/kategoriproduk/delete/{id}', [KategoriProdukController::class, 'destroy']);

    Route::get('/logout', [DashboardController::class, 'logout']);
});
});

Route::prefix('frontend')->group(function () {
    Route::get('/welcome', [TampilanController::class, 'index'])->name('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');