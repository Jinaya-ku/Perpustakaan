<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PeminjamController;
use App\Models\Peminjaman;
use Illuminate\Auth\Events\Login;

// Landing Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Guest Routes (untuk user yang belum login)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-action', [LoginController::class, 'login'])->name('loginAction');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-action', [LoginController::class, 'registerAction'])->name('registerAction');

//controll admin
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin-profil', [AdminController::class, 'profilAdmin'])->name('admin.profil');

Route::get('/edit-buku/{id}', [AdminController::class, 'formEditBuku'])->name('admin.formEditBuku');
Route::put('/edit-buku-action{id}', [AdminController::class, 'editBukuAction'])->name('admin.editBukuAction');
Route::get('/tambah-buku', [AdminController::class, 'formTambahBuku'])->name('admin.formTambahBuku');
Route::post('/tambah-buku-action', [AdminController::class, 'tambahBukuAction'])->name('admin.tambahBukuAction');
Route::delete('/buku-delete/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');

Route::get('/edit-user/{id}', [AdminController::class, 'formEditUser'])->name('admin.formEditUser');
Route::put('/edit-user/update/{id}', [AdminController::class, 'editUserAction'])->name('admin.editUserAction');
Route::get('/tambah-user', [AdminController::class, 'formTambahUser'])->name('admin.formTambahUser');
Route::post('/tambah-user-action', [AdminController::class, 'tambahUserAction'])->name('admin.tambahUserAction');
Route::delete('/user-delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');

Route::get('/edit-peminjaman/{id}', [AdminController::class, 'formEditPeminjaman'])->name('admin.formEditPeminjaman');
Route::put('/edit-peminjaman/update/{id}', [AdminController::class, 'editPeminjamanAction'])->name('admin.editPeminjamanAction');
Route::get('/tambah-peminjaman', [AdminController::class, 'formTambahPeminjaman'])->name('admin.formTambahPeminjaman');
Route::post('/tambah-peminjaman-action', [AdminController::class, 'tambahPeminjamanAction'])->name('admin.tambahPeminjamanAction');
Route::delete('/peminjaman-delete/{id}', [AdminController::class, 'deletePeminjaman'])->name('admin.deletePeminjaman');

//batas admin dan petugas

Route::get('/petugas-dashboard', [PetugasController::class, 'dashboard'])->name('petugas.dashboard');
Route::get('/petugas-profil', [PetugasController::class, 'profilPetugas'])->name('petugas.profil');

//batas petugas dan peminjam

Route::get('/peminjam-dashboard', [PeminjamController::class, 'dashboard'])->name('peminjam.dashboard');
Route::get('/peminjam-profil', [PeminjamController::class, 'profilPeminjam'])->name('peminjam.profil');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Public Routes
Route::get('/search', [BukuController::class, 'search'])->name('search');

// Protected Routes (untuk user yang sudah login)
Route::middleware(['auth'])->group(function () {
    // Admin Routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {

        // Tambahkan route khusus admin lainnya di sini
    });

    // Peminjam Routes


    // Common Routes (untuk semua user yang sudah login)
    Route::prefix('buku')->group(function () {
        Route::get('/search', [BukuController::class, 'search'])->name('buku.search');
        Route::resource('/', BukuController::class)->names('buku');
    });

});
