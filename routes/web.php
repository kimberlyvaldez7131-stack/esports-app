<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GamerController;
use App\Http\Controllers\AuthenticationController;

// Guest Routes
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthenticationController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthenticationController::class, 'login']);

    Route::get('/register', [AuthenticationController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthenticationController::class, 'register']);
});

// Authenticated Routes
Route::middleware('auth')->group(function () {

    Route::get('/', [GamerController::class, 'index'])
        ->name('gamers.index');

    Route::post('/gamers', [GamerController::class, 'store'])
        ->name('gamers.store');

    Route::post('/logout', [AuthenticationController::class, 'logout'])
        ->name('logout');
});