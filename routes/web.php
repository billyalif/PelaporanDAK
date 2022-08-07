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
Route::get('/bidang',[BidangController::class,"index"]);
Route::get('/form-bidang',[BidangController::class,"insert"]);
Route::post('/tambah-bidang',[BidangController::class,"store"]);
Route::get('/hapus-bidang/{id}',[BidangController::class, 'destroy']);
Route::get('/ubah-bidang/{id}',[BidangController::class, 'edit']);
Route::post('/ubah-bidang/{id}',[BidangController::class, 'update']);

//Satker
Route::get('/satker',[SatkerController::class,"index"]);
Route::get('/form-satker',[SatkerController::class,"insert"]);
Route::post('/tambah-satker',[SatkerController::class,"store"]);
Route::get('/hapus-satker/{id}',[SatkerController::class, 'destroy']);
Route::get('/ubah-satker/{id}',[SatkerController::class, 'edit']);
Route::post('/ubah-satker/{id}',[SatkerController::class, 'update']);

//Subbid
Route::get('/subbid',[SubBidangController::class,"index"]);
Route::get('/form-subbid',[SubBidangController::class,"insert"]);
Route::post('/tambah-subbid',[SubBidangController::class,"store"]);
Route::get('/hapus-subbid/{id}',[SubBidangController::class, 'destroy']);
Route::get('/ubah-subbid/{id}',[SubBidangController::class, 'edit']);
Route::post('/ubah-subbid/{id}',[SubBidangController::class, 'update']);

//Kegiatan
Route::get('/kegiatan',[KegiatanController::class,"index"]);
Route::get('/form-kegiatan',[KegiatanController::class,"insert"]);
Route::post('/tambah-kegiatan',[KegiatanController::class,"store"]);
Route::get('/hapus-kegiatan/{id}',[KegiatanController::class, 'destroy']);
Route::get('/ubah-kegiatan/{id}',[KegiatanController::class, 'edit']);
Route::post('/ubah-kegiatan/{id}',[KegiatanController::class, 'update']);


//Anggaran
Route::get('/anggaran',[AnggaranController::class,"index"]);
Route::get('/form-anggaran',[AnggaranController::class,"insert"]);
Route::post('/tambah-anggaran',[AnggaranController::class,"store"]);
Route::get('/hapus-anggaran/{id}',[AnggaranController::class, 'destroy']);
Route::get('/ubah-anggaran/{id}',[AnggaranController::class, 'edit']);
Route::post('/ubah-anggaran/{id}',[AnggaranController::class, 'update']);

Route::get('/form-laporan', function () {
    return view('formlaporan-depan');
});

Route::get('/anggaran-kegiatan', function () {
    return view('anggaran-kegiatan');
});

Route::get('/super-admin', function () {
    return view('super-admin');
});

Route::get('/create-kegiatan', function () {
    return view('create-kegiatan');
});

//EXPORT EXCEL
Route::get('/satker-export_excel', [SatkerController::class, 'export_excel']);