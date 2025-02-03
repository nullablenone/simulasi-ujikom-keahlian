<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [PenggunaController::class, 'index'])->name('pengguna.home');
Route::get('/peminjaman', [PenggunaController::class, 'peminjaman'])->name('pengguna.peminjaman');
Route::post('/peminjaman/{id}/inventaris', [PenggunaController::class, 'peminjamanInventaris'])->name('pengguna.peminjaman.inventaris');

//admin
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('/inventaris', InventarisController::class);
    Route::resource('/peminjaman', PeminjamanController::class);
    Route::patch('/peminjaman/{id}/update-status', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
});

require __DIR__ . '/auth.php';
