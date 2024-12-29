<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComfinotesController;

Route::get('/', [ComfinotesController::class, 'dashboardUser']);
Route::get('/dashboar-admin', [AdminController::class, 'dashboardAdmin']);



