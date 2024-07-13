<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/wisata', function () {
    return view('wisata');
});

Route::get('/welcome', function () {
    return view('welcome');
});
