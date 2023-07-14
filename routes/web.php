<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia('Home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return Inertia('Dasboard/Index');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'index'])->name('login');
        Route::post('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'authenticate']);
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', function () {
            return Inertia('Admin/Index');
        })->name('index');
    });
});
