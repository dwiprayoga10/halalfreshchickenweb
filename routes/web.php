<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/testimoni', function () {
    return view('pages.testimoni');
})->name('testimoni');