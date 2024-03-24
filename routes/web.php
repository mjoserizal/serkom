<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MahasiswaController;
use App\Models\Admin;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/home', [MahasiswaController::class, 'home'])->name('mahasiswa.home');
Route::get('/admin/menu', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/{nim}', [AdminController::class, 'showByNim'])->name('admin.show');
Route::delete('/admin/mahasiswa/{nim}', [AdminController::class, 'delete'])->name('admin.delete');
Route::get('/admin/mahasiswa/{nim}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/mahasiswa/{nim}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/mahasiswa/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/mahasiswa', [AdminController::class, 'store'])->name('admin.store');
