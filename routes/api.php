<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'loginApi']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [LoginController::class, 'logoutApi']);
    Route::apiResource('users', UserController::class);
});