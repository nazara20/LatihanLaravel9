<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/buku', [CategoryController::class, 'buku'])->name('buku');
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori');
Route::get('/siswa', [UserController::class, 'index'])->name('siswa');

Route::get('/books.detail/{slug}', [CategoryController::class, 'bukudetail'])->name('books.detail');
Route::get('/category.detail/{id}', [CategoryController::class, 'categorydetail'])->name('category.detail');