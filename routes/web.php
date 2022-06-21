<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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


Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/detail/{id_barang}', [BarangController::class, 'detail']);
Route::get('/barang/add/', [BarangController::class, 'add']);
Route::get('/barang/edit/{id_barang}', [BarangController::class, 'edit']);
Route::post('/barang/insert/', [BarangController::class, 'insert']);
Route::post('/barang/update/{id_barang}', [BarangController::class, 'update']);
Route::get('/barang/delete/{id_barang}', [BarangController::class, 'delete']);
Route::get('/dataproduk', [ProdukController::class, 'index'])->name('dataproduk');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('dataproduk', ProdukController::class);

