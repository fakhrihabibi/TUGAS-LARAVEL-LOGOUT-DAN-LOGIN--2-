<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CosplayController;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/cosplays', [CosplayController::class, 'index'])->name('cosplays.index');

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::resource('cosplays', CosplayController::class)->except(['index']);
    Route::get('/cosplays', [CosplayController::class, 'index'])->name('cosplays.index');
});