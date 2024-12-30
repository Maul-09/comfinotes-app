<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', [AuthController::class, 'ShowAuth'])->name('login');

Route::get('/dashboard-user', [UsersController::class, 'DashboardUser'])->name('dashboard');
Route::get('/statistik-user', [UsersController::class, 'StatistikUser'])->name('statistik');
Route::get('/riwayat-user', [UsersController::class, 'RiwayatUser'])->name('riwayat');

Route::get('/dashboard-admin', [AdminController::class, 'DashboardAdmin'])->name('dashboard-admin');
Route::get('/komunitas-admin', [AdminController::class, 'KomunitasAdmin'])->name('komunitas-admin');
Route::get('/statistik-admin', [AdminController::class, 'StatistikAdmin'])->name('statistik-admin');
Route::get('/riwayat-admin', [AdminController::class, 'RiwayatAdmin'])->name('riwayat-admin');
