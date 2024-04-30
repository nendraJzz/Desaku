<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingpageController;

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

// Interface
Route::get('/interface', [LandingpageController::class, 'interface'])->name('interface');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// Admin
Route::get('/aktivitasadmin', [AdminController::class, 'aktivitasadmin'])->name('aktivitasadmin');
Route::get('/wargaadmin', [AdminController::class, 'wargaadmin'])->name('wargaadmin');
Route::get('/pengumumanadmin', [AdminController::class, 'pengumumanadmin'])->name('pengumumanadmin');

// Admin opsi
Route::get('/laporanpencurianadmin', [AdminController::class, 'laporanpencurianadmin'])->name('laporanpencurianadmin');
Route::get('/laporankebakaranadmin', [AdminController::class, 'laporankebakaranadmin'])->name('laporankebakaranadmin');
Route::get('/laporanbencanaadmin', [AdminController::class, 'laporanbencanaadmin'])->name('laporanbencanaadmin');
Route::get('/laporankecelakaanadmin', [AdminController::class, 'laporankecelakaanadmin'])->name('laporankecelakaanadmin');

// User 
Route::get('/aktivitasuser', [UserController::class, 'aktivitasuser'])->name('aktivitasuser');
Route::get('/wargauser', [UserController::class, 'wargauser'])->name('wargauser');
Route::get('/pengumumanuser', [UserController::class, 'pengumumanuser'])->name('pengumumanuser');

// User Opsi
Route::get('/laporanpencurianuser', [UserController::class, 'laporanpencurianuser'])->name('laporanpencurianuser');
Route::get('/laporankebakaranuser', [UserController::class, 'laporankebakaranuser'])->name('laporankebakaranuser');
Route::get('/laporanbencanauser', [UserController::class, 'laporanbencanauser'])->name('laporanbencanauser');
Route::get('/laporankecelakaanuser', [UserController::class, 'laporankecelakaanuser'])->name('laporankecelakaanuser');
