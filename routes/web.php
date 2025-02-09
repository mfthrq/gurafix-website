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