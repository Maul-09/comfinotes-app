<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComfinotesController;

Route::get('/', [ComfinotesController::class, 'dashboardUser']);



