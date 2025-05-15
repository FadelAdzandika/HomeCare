<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('dashboard'); })->name('dashboard');
Route::get('/views/dashboard', function () { return view('dashboard'); })->name('views/dashboard');
Route::get('/views/caregiver', function () { return view('caregiver'); })->name('views/caregiver');
Route::get('/views/homecare', function () { return view('homecare'); })->name('views/homecare');
Route::get('/views/babysitter', function () { return view('babysitter'); })->name('views/babysitter');