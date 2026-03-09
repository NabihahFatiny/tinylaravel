<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/add-student', [PageController::class, 'create']);
Route::post('/add-student', [PageController::class, 'store']);
