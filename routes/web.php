<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('dashboard', DashboardController::class)
    ->name('dashboard')
    ->middleware('auth');

Route::get('login', [AuthController::class, 'login'])
    ->name('login');


Route::post('authenticate', [AuthController::class, 'authenticate'])
    ->name('authenticate');


Route::post('logout', [AuthController::class, 'logout'])
    ->name('logout');