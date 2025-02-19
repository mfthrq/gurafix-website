<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ChatController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PelangganMiddleware;
use App\Http\Middleware\DisableCsrfForMidtrans;

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

    Route::get('/admin/data-pelanggan', [PelangganController::class, 'indexDataPelanggan'])->name('admin.data-pelanggan');
    
    Route::get('/admin/data-layanan', [LayananController::class, 'indexDataLayanan'])->name('admin.data-layanan');
    
    Route::get('/admin/data-paket', [PaketController::class, 'indexDataPaket'])->name('admin.data-paket');

    Route::get('/admin/data-pemesanan', [PemesananController::class, 'indexDataPemesanan'])->name('admin.data-pemesanan');

    Route::get('/admin/chat-admin', [ChatController::class, 'indexChatAdmin'])->name('admin.chat-admin');

});

// ====== CRUD DATA LAYANAN ======
Route::post('/admin/data-layanan/store', [LayananController::class, 'store'])->name('data-layanan.store');
Route::put('/admin/data-layanan/{id}', [LayananController::class, 'update'])->name('data-layanan.update');
Route::delete('/admin/data-layanan/{id}', [LayananController::class, 'destroy'])->name('data-layanan.destroy');

// ====== CRUD DATA PAKET ======
Route::post('/admin/data-paket/store', [PaketController::class, 'store'])->name('data-paket.store');
Route::put('/admin/data-paket/{id}', [PaketController::class, 'update'])->name('data-paket.update');
Route::delete('/admin/data-paket/{id}', [PaketController::class, 'destroy'])->name('data-paket.destroy');

// ====== CRUD DATA PEMESANAN ======
Route::post('/admin/data-pemesanan/store', [PemesananController::class, 'store'])->name('data-pemesanan.store');
Route::put('/admin/data-pemesanan/{id}', [PemesananController::class, 'update'])->name('data-pemesanan.update');
Route::delete('/admin/data-pemesanan/{id}', [PemesananController::class, 'destroy'])->name('data-pemesanan.destroy');

// ====== CHAT FOR ADMIN =======
Route::get('/admin/chat-admin/get-chat/{id}', [ChatController::class, 'getChat'])->name('chat-admin.getChat');
Route::post('/admin/chat-admin/store', [ChatController::class, 'store'])->name('chat-admin.store');

// ========================== PELANGGAN ============================

// ========== LOGIN ==========
Route::get('/login', [AuthController::class, 'showLoginFormCustomer'])->name('customer.login');
Route::post('/login', [AuthController::class, 'loginCustomer'])->name('customer.login.submit');
Route::post('/logout', [AuthController::class, 'logoutCustomer'])->name('customer.logout');

// ========== SIGNUP ==========
Route::get('/signup', function () {
    return view('customer/signup');
})->name('signup');

Route::post('/signup/store', [PelangganController::class, 'storePelanggan'])->name('signup.store');

// ========== MIDDLEWARE ==========
Route::middleware([PelangganMiddleware::class])->group(function () { 

    // ========== PROFILE ==========
    Route::get('/profile', [PelangganController::class, 'indexPelanggan'])->name('profile');
    
    // ========== CHAT FOR CUSTOMER PAGE ==========
    Route::get('/chat', function () {
        return view('customer.chat');
    })->name('chat');

    // ========== RIWAYAT ==========
    Route::get('/riwayat', [PemesananController::class, 'indexRiwayat'])->name('riwayat');
});

// ====== CHAT FOR CUSTOMER ======
Route::get('/customer/chat/get-chat', [ChatController::class, 'getChatForCustomer']);
Route::post('/customer/chat/storeCustomer', [ChatController::class, 'storeCustomer'])->name('chat.storeCustomer');

// ========== PROFILE =========
Route::put('/profile/{id}', [PelangganController::class, 'updatePelanggan'])->name('profile.updatePelanggan');

// ========== LAYANAN =========
Route::get('/layanan', [LayananController::class, 'indexLayanan'])->name('layanan');
Route::get('/detail-layanan/{id}', [LayananController::class, 'showDetailLayanan'])->name('layanan.detail');

// ========== PAKET ==========
Route::get('/detail-paket/{id}', [PaketController::class, 'showDetailPaket'])->name('paket.detail');

// ========== PEMESANAN ==========
Route::post('/pemesanan/store', [PemesananController::class, 'storeCustomer'])->name('pemesanan.store');

// Route::post('/midtrans-callback', [PemesananController::class, 'callback']);

// ========== OTHER CUSTOMER PAGES ==========
Route::get('/', [PelangganController::class, 'indexBeranda'])->name('beranda');

Route::get('/tentang', function () {
    return view('customer/about');
})->name('tentang');

Route::get('/kontak', function () {
    return view('customer/contact');
})->name('kontak');

Route::get('/detail-layanan', function () {
    return view('customer/detail-layanan');
})->name('detail-layanan');