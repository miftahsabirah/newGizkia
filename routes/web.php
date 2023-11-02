<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/layoutsAdmin', function () {
    return view('layoutsAdmin');
});

Route::get('/manajemenAkses', function () {
    return view('manajemenAkses');
});

Route::get('/manajemenPetugasKesehatan', function () {
    return view('manajemenPetugasKesehatan');
});

Route::get('/databumil', function () {
    return view('dataBumil');
});


