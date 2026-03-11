<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::redirect('/', '/admin');

Route::get('/students-page', [PageController::class, 'home'])->name('students.page');
Route::get('/add-student', [PageController::class, 'create'])->name('students.create');
Route::post('/add-student', [PageController::class, 'store'])->name('students.store');
Route::get('/edit-student/{id}', [PageController::class, 'edit'])->name('students.edit');
Route::put('/edit-student/{id}', [PageController::class, 'update'])->name('students.update');
Route::get('/delete-student/{id}', [PageController::class, 'destroy'])->name('students.delete');
Route::get('/student/{id}', [PageController::class, 'show'])->name('students.show');
