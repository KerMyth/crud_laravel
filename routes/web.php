<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\profileController;

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
    return view('Layout');
});


Route::get('berita', [beritaController::class, 'index']);
Route::post('berita/tambah', [BeritaController::class, 'tambah']);
Route::post('berita/edit', [BeritaController::class, 'edit']);
Route::post('berita/hapus', [BeritaController::class, 'hapus']);

Route::get('kontak', [kontakController::class, 'index']);
Route::post('kontak/tambah', [kontakController::class, 'tambah']);
Route::post('kontak/edit', [kontakController::class, 'edit']);
Route::post('kontak/hapus', [kontakController::class, 'hapus']);

Route::get('profile', [profileController::class, 'index']);
Route::post('profile/tambah', [profileController::class, 'tambah']);
Route::post('profile/edit', [profileController::class, 'edit']);
Route::post('profile/hapus', [profileController::class, 'hapus']);
