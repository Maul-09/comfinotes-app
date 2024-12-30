<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComfinotesController;

Route::get('/', [AuthController::class, 'ShowAuth'])->name('login');
Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register');
Route::post('/register', [AuthController::class, 'handleRegister']);

Route::get('/dashboard-user', [ComfinotesController::class, 'dashboardUser'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard-admin', [AdminController::class, 'DashboardAdmin'])->name('dashboard-admin');
    Route::get('/komunitas-admin', [AdminController::class, 'KomunitasAdmin'])->name('komunitas-admin');
    Route::get('/statistik-admin', [AdminController::class, 'StatistikAdmin'])->name('statistik-admin');
    Route::get('/riwayat-admin', [AdminController::class, 'RiwayatAdmin'])->name('riwayat-admin');
});

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

