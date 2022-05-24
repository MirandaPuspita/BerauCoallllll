<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeoJsonController;
use App\Http\Controllers\HubungikamiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SopPerizinanController;
use App\Http\Controllers\SyaratKetentuanController;
use App\Http\Controllers\TestimoniController;
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


// FRONTEND
Route::get('/', function () {
    return view('frontend.index');
});


// Route::get('/syarat', [SyaratKetentuanController::class, 'index']);
// Route::get('/syarat/nama_perizinan', [SyaratKetentuanController::class, 'create']);
// Route::post('/syarat/sektor', [SyaratKetentuanController::class, 'sektor']);
Route::get('/syaratketentuan', [SyaratKetentuanController::class, 'index']);
Route::get('/syaratketentuan/sektor', [SyaratKetentuanController::class, 'sektor']);
Route::get('/sektor', [SyaratKetentuanController::class, 'perizinan']);
Route::post('/persyaratan', [PerizinanController::class, 'persyaratan']);
Route::get('/permohonan', [PermohonanController::class, 'permohonan']);

Route::get('/perizinan', [PerizinanController::class, 'index']);
Route::get('/perizinan/sektor', [PerizinanController::class, 'sektor']);
Route::post('/sektor', [PerizinanController::class, 'perizinan']);

Route::get('/sopperizinan', [SopPerizinanController::class, 'sopperizinan']);


Route::get('geojson/{table}', [GeoJsonController::class, 'geojson'])->name('geojson');



Route::get('/peta', [PetaController::class, 'peta']);
Route::get('/testimoni', [TestimoniController::class, 'testimoni']);
Route::get('/hubungikami', [HubungikamiController::class, 'hubungikami']);
// Route::get('geojson/{table}', [GeoJsonController::class, 'geojson']);
// Route::get('peta', [GeoJsonController::class, 'peta']);


// AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// BACKEND
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
