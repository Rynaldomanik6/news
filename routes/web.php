<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriBeritaController;

Route::get('/', [FrontController::class,'index'])->name('login');
Route::get('berita_terbaru', [FrontController::class,'berita_terbaru']);
Route::get('kategori_berita/{categori:slug}', [FrontController::class,'kategori_berita']);
Route::get('post/{categori:slug}', [FrontController::class,'postingan']);
Route::post('admin_log_in', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::get('d_berita',[BeritaController::class, 'index'])->middleware('auth');
Route::get('tambah_berita',[BeritaController::class, 'tambah_berita'])->middleware('auth');
Route::post('tambah_berita',[BeritaController::class, 'simpan_berita'])->middleware('auth');
Route::post('edit_berita',[BeritaController::class, 'edit_berita'])->middleware('auth');
Route::post('ubah_berita',[BeritaController::class, 'ubah_berita'])->middleware('auth');
Route::post('hapus_berita',[BeritaController::class, 'hapus_berita'])->middleware('auth');

Route::get('kategori_berita',[KategoriBeritaController::class, 'index'])->middleware('auth');
Route::get('tambah_kategori_berita',[KategoriBeritaController::class, 'tambah_kategori_berita'])->middleware('auth');
Route::post('tambah_kategori_berita',[KategoriBeritaController::class, 'tambah'])->middleware('auth');
Route::post('edit_kategori_berita',[KategoriBeritaController::class, 'edit_kategori_berita'])->middleware('auth');
Route::post('ubah_kategori_berita',[KategoriBeritaController::class, 'ubah_kategori_berita'])->middleware('auth');
Route::post('hapus_kategori_berita',[KategoriBeritaController::class, 'hapus'])->middleware('auth');
