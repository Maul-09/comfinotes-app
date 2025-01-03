<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;

Route::get('/', [AuthController::class, 'ShowAuth'])->name('login');
Route::post('/login', [AuthController::class, 'Auth'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/dashboard-admin', [AdminController::class, 'DashboardAdmin'])->name('dashboard-admin');
    Route::get('/komunitas-admin', [AdminController::class, 'KomunitasAdmin'])->name('komunitas-admin');
    Route::get('/statistik-admin', [AdminController::class, 'StatistikAdmin'])->name('statistik-admin');
    Route::get('/riwayat-admin', [AdminController::class, 'RiwayatAdmin'])->name('riwayat-admin');
});

Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/dashboard-user', [UsersController::class, 'DashboardUser'])->name('dashboard-user');
    Route::get('/statistik-user', [UsersController::class, 'StatistikUser'])->name('statistik-user');
    Route::get('/riwayat-user', [UsersController::class, 'RiwayatUser'])->name('riwayat-user');
});
