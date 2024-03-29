<?php

use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DakController;
use App\Http\Controllers\Dashboard\LoginController as DashboardLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FormLaporanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatkerController;
use App\Http\Controllers\SubBidangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login-authenticate', [LoginController::class, "authenticate"]);
Route::get('/logout', [LoginController::class, 'logout']);

//Admin Dahboard
Route::get('/admin', function () {
    return view('Dashboard.admin',[
        'title' => 'Dashboard'
    ]);
});
// Route::middleware('auth:admin')->group(function () {
//     Route::get('/admin',[DashboardController::class,"index"])->name('dashboard');

//laporan
Route::get('/data-laporan', function () {
    return view('laporan-data');
});

//Bidang
Route::get('/bidang-{id}',[BidangController::class,'index']);
Route::get('/form-bidang-{id}',[BidangController::class,'insert']);
Route::post('/tambah-bidang',[BidangController::class,'store']);
Route::get('/hapus-bidang-{id}',[BidangController::class, 'destroy']);
Route::get('/ubah-bidang-{id}',[BidangController::class, 'edit']);
Route::post('/ubah-bidang-{id}',[BidangController::class, 'update']);
Route::get('/side-bidang-{id}',[BidangController::class,'side']);

//Satker
Route::get('/satker',[SatkerController::class,'index']);
Route::get('/form-satker',[SatkerController::class,'insert']);
Route::post('/tambah-satker',[SatkerController::class,'store']);
Route::get('/hapus-satker-{id}',[SatkerController::class, 'destroy']);
Route::get('/ubah-satker-{id}',[SatkerController::class, 'edit']);
Route::post('/ubah-satker-{id}',[SatkerController::class, 'update']);



//Subbid
Route::get('/subbid-{id}',[SubBidangController::class,"index"]);
Route::get('/form-subbid-{id}',[SubBidangController::class,"insert"]);
Route::post('/tambah-subbid',[SubBidangController::class,"store"]);
Route::get('/hapus-subbid-{id}',[SubBidangController::class, 'destroy']);
Route::get('/ubah-subbid-{id}',[SubBidangController::class, 'edit']);
Route::post('/ubah-subbid-{id}',[SubBidangController::class, 'update']);

//Kegiatan
Route::get('/kegiatan-{id}',[KegiatanController::class,"index"]);
Route::get('/form-kegiatan-{id}',[KegiatanController::class,"insert"]);
Route::post('/tambah-kegiatan',[KegiatanController::class,"store"]);
Route::get('/hapus-kegiatan-{id}',[KegiatanController::class, 'destroy']);
Route::get('/ubah-kegiatan-{id}',[KegiatanController::class, 'edit']);
Route::post('/ubah-kegiatan-{id}',[KegiatanController::class, 'update']);
Route::get('/detail-kegiatan-{id}',[KegiatanController::class, 'detail']);

//Anggaran
Route::get('/anggaran',[AnggaranController::class,"index"]);
Route::get('/anggaran-kegiatan-{id}',[AnggaranController::class,"insert"]);
Route::post('/tambah-anggaran-{id}',[AnggaranController::class,"store"]);
Route::get('/hapus-anggaran-{id}',[AnggaranController::class, 'destroy']);
Route::get('/ubah-anggaran-{id}',[AnggaranController::class, 'edit']);
Route::post('/ubah-anggaran-{id}',[AnggaranController::class, 'update']);


//KK
Route::get('/kk',[UserController::class,"index"]);

Route::get('/satker-{id}',[SatkerController::class,'index2']);

Route::get('/form-laporan', function () {
    return view('formlaporan-depan');
});

Route::get('/anggaran-kegiatan', function () {
    return view('anggaran-kegiatan');
});

Route::get('/super-admin', function () {
    return view('dashboard.super-admin');
});

Route::get('/create-kegiatan', function () {
    return view('create-kegiatan');
});

Route::get('/home', function () {
    return view('landing');
});

//EXPORT EXCEL
Route::get('/format-export-excel{id}', [KegiatanController::class, 'export']);

Route::get('/liatformat', function() {
    return view('kegiatan-export-excel');
});
