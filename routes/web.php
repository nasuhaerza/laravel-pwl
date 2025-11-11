<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login_process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/mahasiswa/{nama}/{nim}', [MahasiswaController::class, 'index'])->name('mahasiswa');
// Route::get('/cari', [SearchController::class, 'index'])->name('cari');

// Modul Pegawai
Route::get('/employee', [EmployeeController::class, 'index'])->name('emp');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('emp_create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('emp_store');
Route::delete('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('emp_delete');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('emp_edit');
Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('emp_update');

// Modul Jabatan
Route::get('/position', [PositionController::class, 'index'])->name('position');
Route::get('/position/create', [PositionController::class, 'create'])->name('position_create');
Route::post('/position/store', [PositionController::class, 'store'])->name('position_store');
Route::delete('/position/delete/{id}', [PositionController::class, 'delete'])->name('position_delete');
Route::get('/position/edit/{id}', [PositionController::class, 'edit'])->name('position_edit');
Route::put('/position/update/{id}', [PositionController::class, 'update'])->name('position_update');