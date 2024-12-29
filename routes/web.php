<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComfinotesController;

Route::get('/', [AuthController::class, 'ShowAuth'])->name('login');
Route::get('/dashboard-user', [ComfinotesController::class, 'dashboardUser']);
Route::get('/dashboard-admin', [AdminController::class, 'dashboardAdmin']);
Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register');




