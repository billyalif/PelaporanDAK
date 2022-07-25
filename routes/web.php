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

//Landing Page 
Route::get('/', function () {
    return view('home');
});

//Authentication
Route::get('/login', function () {
    return view('login');
});
Route::post('/login/authenticate', [LoginController::class, "authenticate"]);
Route::get('/logout', [LoginController::class, 'logout']);

//Admin Dahboard
Route::get('/admin', function () {
    return view('admin');
});
// Route::middleware('auth:admin')->group(function () {
//     Route::get('/admin',[DashboardController::class,"index"])->name('dashboard');

//laporan
Route::get('/data-laporan', function () {
    return view('laporan-data');
});

//Bidang
Route::get('/data-bidang', function () {
    return view('bidang-data');
});
Route::get('/bidang',[BidangController::class,"index"]);
Route::get('/form-bidang',[BidangController::class,"form"]);
Route::post('/tambah-bidang',[BidangController::class,"insert"]);
Route::get('/hapus-bidang/{id}',[BidangController::class, 'delete']);
Route::get('/ubah-bidang/{id}',[BidangController::class, 'formUpdate']);
Route::post('/ubah-bidang/{id}',[BidangController::class, 'update']);

//Satker
Route::get('/data-satker', function () {
    return view('satker-data');
});
Route::get('/satker',[SatkerController::class,"index"]);
Route::get('/form-satker',[SatkerController::class,"form"]);
Route::post('/tambah-satker',[SatkerController::class,"insert"]);
Route::get('/hapus-satker/{id}',[SatkerController::class, 'delete']);
Route::get('/ubah-satker/{id}',[SatkerController::class, 'formUpdate']);
Route::post('/ubah-satker/{id}',[SatkerController::class, 'update']);

//Subbid
Route::get('/data-subbid', function () {
    return view('subbid-data');
});
Route::get('/subbid',[SubBidangController::class,"index"]);
Route::get('/form-subbid',[SubBidangController::class,"form"]);
Route::post('/tambah-subbid',[SubBidangController::class,"insert"]);
Route::get('/hapus-subbid/{id}',[SubBidangController::class, 'delete']);
Route::get('/ubah-subbid/{id}',[SubBidangController::class, 'formUpdate']);
Route::post('/ubah-subbid/{id}',[SubBidangController::class, 'update']);

//Kegiatan
Route::get('/data-kegiatan', function () {
    return view('kegiatan-data');
});
Route::get('/kegiatan',[KegiatanController::class,"index"]);
Route::get('/form-kegiatan',[KegiatanController::class,"form"]);
Route::post('/tambah-kegiatan',[KegiatanController::class,"insert"]);
Route::get('/hapus-kegiatan/{id}',[KegiatanController::class, 'delete']);
Route::get('/ubah-kegiatan/{id}',[KegiatanController::class, 'formUpdate']);
Route::post('/ubah-kegiatan/{id}',[KegiatanController::class, 'update']);

Route::get('/form-laporan', function () {
    return view('formlaporan');
});

Route::get('/super-admin', function () {
    return view('super-admin');
});