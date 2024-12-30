<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', [AuthController::class, 'ShowAuth'])->name('login');
Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register');

Route::get('/dashboard-user', [UsersController::class, 'dashboardUser'])->name('dashboard');

Route::get('/dashboard-admin', [AdminController::class, 'DashboardAdmin'])->name('dashboard-admin');
Route::get('/komunitas-admin', [AdminController::class, 'KomunitasAdmin'])->name('komunitas-admin');
Route::get('/statistik-admin', [AdminController::class, 'StatistikAdmin'])->name('statistik-admin');
Route::get('/riwayat-admin', [AdminController::class, 'RiwayatAdmin'])->name('riwayat-admin');
