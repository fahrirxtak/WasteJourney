<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcoImpactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WasteManagementController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/layanan', [ServiceController::class, 'index'])->name('service');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pengelolaan-sampah', [WasteManagementController::class, 'index'])->name('waste.management');
    Route::get('/pengurangan-sampah', [EcoImpactController::class, 'index'])->name('eco-impact');
});

require __DIR__ . '/auth.php';
