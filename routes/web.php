<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PelangganMiddleware;

// ========================== ADMIN ============================

// Rute halaman login admin
Route::get('/login-admin', [AuthController::class, 'showLoginFormAdmin'])->name('admin.login-admin');
Route::post('/login-admin', [AuthController::class, 'loginAdmin'])->name('admin.login.submit');
Route::post('/logout-admin', [AuthController::class, 'logoutAdmin'])->name('admin.logout');

// Rute yang hanya bisa diakses oleh admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index-admin');
    })->name('admin.index-admin');

    Route::get('/admin/data-layanan', function () {
        return view('admin.data-layanan');
    })->name('admin.data-layanan');

    Route::get('/admin/data-paket', function () {
        return view('admin.data-paket');
    })->name('admin.data-paket');

    Route::get('/admin/data-pelanggan', function () {
        return view('admin.data-pelanggan');
    })->name('admin.data-pelanggan');

    Route::get('/admin/data-pemesanan', function () {
        return view('admin.data-pemesanan');
    })->name('admin.data-pemesanan');

    Route::get('/admin/chat-admin', function () {
        return view('admin.chat-admin');
    })->name('admin.chat-admin');
});

// ========================== PELANGGAN ============================

// ========== LOGIN ==========
Route::get('/login', [AuthController::class, 'showLoginFormCustomer'])->name('customer.login');
Route::post('/login', [AuthController::class, 'loginCustomer'])->name('customer.login.submit');
Route::post('/login', [AuthController::class, 'logoutCustomer'])->name('customer.logout');

// ========== SIGNUP ==========
Route::get('/signup', function () {
    return view('customer/signup');
})->name('signup');
Route::post('/signup/store', [PelangganController::class, 'storePelanggan'])->name('signup.store');

// ========== MIDDLEWARE ==========
Route::middleware([PelangganMiddleware::class])->group(function () { 
    Route::view('/profile', 'customer.profile');
    Route::view('/riwayat', 'customer.riwayat');
});

// ========== OTHER CUSTOMER PAGES ==========
Route::get('/', function () {
    return view('customer/index');
})->name('beranda');

Route::get('/tentang', function () {
    return view('customer/about');
})->name('tentang');

Route::get('/layanan', function () {
    return view('customer/service');
})->name('layanan');

Route::get('/kontak', function () {
    return view('customer/contact');
})->name('kontak');

Route::get('/detail-layanan', function () {
    return view('customer/detail-layanan');
})->name('detail-layanan');

Route::get('/detail-paket', function () {
    return view('customer/detail-paket');
})->name('detail-paket');