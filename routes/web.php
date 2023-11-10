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
    return view('admin.kelolaProfil.manajemenAkses');
});

Route::get('/manajemenPetugasKesehatan', function () {
    return view('admin.kelolaProfil.manajemenPetugasKesehatan');
});

Route::get('/dataBumil', function () {
    return view('admin.kelolaData.dataBumil');
});

Route::get('/dataIbuMelahirkan', function () {
    return view('admin.kelolaData.dataIbuMelahirkan');
});

Route::get('/dataBumilRisti', function () {
    return view('admin.kelolaData.dataBumilRisti');
});

Route::get('/coba', function () {
    return view('coba');
});


Route::get('/tambahdata', function () {
    return view('admin.kelolaProfil.dataKelolaProfil');
});


