<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PeminjamanController;

// Landing Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Guest Routes (untuk user yang belum login)
Route::middleware(['guest'])->group(function () {
    // Authentication Routes
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Public Routes
Route::get('/search', [BukuController::class, 'search'])->name('search');

// Protected Routes (untuk user yang sudah login)
Route::middleware(['auth'])->group(function () {
    // Admin Routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        // Tambahkan route khusus admin lainnya di sini
    });

    // Petugas Routes
    Route::middleware(['role:petugas'])->prefix('petugas')->group(function () {
        Route::get('/', function () {
            return view('petugas.dashboard');
        })->name('petugas.dashboard');
        // Tambahkan route khusus petugas lainnya di sini
    });

    // Peminjam Routes
    Route::middleware(['role:peminjam'])->prefix('peminjam')->group(function () {
        Route::get('/', function () {
            return view('peminjam.dashboard');
        })->name('peminjam.dashboard');
        // Tambahkan route khusus peminjam lainnya di sini
    });

    // Common Routes (untuk semua user yang sudah login)
    Route::prefix('buku')->group(function () {
        Route::get('/search', [BukuController::class, 'search'])->name('buku.search');
        Route::resource('/', BukuController::class)->names('buku');
    });

    Route::prefix('peminjaman')->group(function () {
        Route::get('/{buku}', [PeminjamanController::class, 'create'])->name('borrow.create');
        Route::post('/{buku}', [PeminjamanController::class, 'store'])->name('borrow.store');
    });
});
