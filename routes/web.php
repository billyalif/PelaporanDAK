<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/data-laporan', function () {
    return view('laporan-data');
});

Route::get('/data-bidang', function () {
    return view('bidang-data');
});

Route::get('/data-satker', function () {
    return view('satker-data');
});

Route::get('/data-subbid', function () {
    return view('subbid-data');
});

Route::get('/data-kegiatan', function () {
    return view('kegiatan-data');
});

Route::get('/form-laporan', function () {
    return view('formlaporan');
});

Route::get('/super-admin', function () {
    return view('super-admin');
});