<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'index']);
Route::get('/tentang', [SiteController::class, 'tentang']);
Route::get('/berita', [SiteController::class, 'berita']);
Route::get('/galeri', [SiteController::class, 'galeri']);
Route::get('/kontak', [SiteController::class, 'kontak']);
Route::post('/send-email', [MailController::class, 'index']);

Route::get("/login", [LoginController::class, 'login'])->name('login');
Route::post("/actionlogin", [LoginController::class, 'actionlogin']);
Route::get("/logout", [LoginController::class, 'actionlogout']);
// Buat halaman admin,
Route::get("/admin", [DashboardContoller::class, 'index'])->middleware('auth');
// CRUD Berita
Route::get("/admin/berita", [NewsController::class, 'index'])->middleware('auth');
Route::get("/admin/berita/tambah", [NewsController::class, 'create'])->middleware('auth');
Route::post("/admin/berita/tambah", [NewsController::class, 'store'])->middleware('auth');
Route::get("/admin/berita/ubah/{id}", [NewsController::class, 'edit'])->middleware('auth');
Route::post("/admin/berita/ubah/{id}", [NewsController::class, 'update'])->middleware('auth');
Route::get("/admin/berita/hapus/{id}", [NewsController::class, 'destroy'])->middleware('auth');

// CRUD Galeri
Route::get("/admin/galeri", [GalleryController::class, 'index'])->middleware('auth');
Route::get("/admin/galeri/tambah", [GalleryController::class, 'create'])->middleware('auth');
Route::post("/admin/galeri/tambah", [GalleryController::class, 'store'])->middleware('auth');
Route::get("/admin/galeri/ubah/{id}", [GalleryController::class, 'edit'])->middleware('auth');
Route::post("/admin/galeri/ubah/{id}", [GalleryController::class, 'update'])->middleware('auth');
Route::get("/admin/galeri/hapus/{id}", [GalleryController::class, 'destroy'])->middleware('auth');

// CRUD Kontak
Route::get("/admin/kontak", [ContactController::class, 'index'])->middleware('auth');
Route::get("/admin/kontak/ubah/", [ContactController::class, 'edit'])->middleware('auth');
Route::post("/admin/kontak/ubah/", [ContactController::class, 'update'])->middleware('auth');

// CRUD Tentang
Route::get("/admin/tentang", [AboutController::class, 'index'])->middleware('auth');
Route::get("/admin/tentang/ubah/", [AboutController::class, 'edit'])->middleware('auth');
Route::post("/admin/tentang/ubah/", [AboutController::class, 'update'])->middleware('auth');
