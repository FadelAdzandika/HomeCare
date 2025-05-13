<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/views/homecare', function () {
    return view('homecare');
})->name('views/homecare');
