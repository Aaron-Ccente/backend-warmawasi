<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// ======================
// AUTH (login, logout)
// ======================
Route::prefix('auth')->group(function () {
    Route::post('/user/login', [AuthController::class, 'login']);
    Route::post('/admin/login', [AuthController::class, 'loginAdmin']);
    
    // Route::middleware('auth:sanctum')->group(function () {
    //     Route::post('/logout', [AuthController::class, 'logout']);
    // });
});

Route::prefix('admin')->group(function () {
    Route::post('/', [AdminController::class,'createAdmin']);
    Route::get('/', [AdminController::class,'getAdmins']);
    Route::get('/:id', [AdminController::class,'getAdminById']);
    Route::delete('/:id', [AdminController::class,'deleteAdmin']);
});