<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComfinotesController;

Route::get('/dashboard-user', [ComfinotesController::class, 'dashboardUser']);



