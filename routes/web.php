<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer/index');
})->name('home');

Route::get('/about', function () {
    return view('customer/about');
})->name('about');

Route::get('/service', function () {
    return view('customer/service');
})->name('service');

Route::get('/contact', function () {
    return view('customer/contact');
})->name('contact');

Route::get('/login', function () {
    return view('customer/login');
})->name('login');

Route::get('/signup', function () {
    return view('customer/signup');
})->name('signup');

Route::get('/detail-layanan', function () {
    return view('customer/detail-layanan');
})->name('detail-layanan');

Route::get('/detail-paket', function () {
    return view('customer/detail-paket');
})->name('detail-paket');

Route::get('/profile', function () {
    return view('customer/profile');
})->name('profile');

Route::get('/riwayat', function () {
    return view('customer/riwayat');
})->name('riwayat');

// ======= ADMIN =======
Route::get('/index-admin', function () {
    return view('admin/index-admin');
})->name('index-admin');

Route::get('/data-pelanggan', function () {
    return view('admin/data-pelanggan');
})->name('data-pelanggan');

Route::get('/data-paket', function () {
    return view('admin/data-paket');
})->name('data-paket');

Route::get('/data-layanan', function () {
    return view('admin/data-layanan');
})->name('data-layanan');

Route::get('/data-pemesanan', function () {
    return view('admin/data-pemesanan');
})->name('data-pemesanan');

Route::get('/chat-admin', function () {
    return view('admin/chat-admin');
})->name('chat-admin');