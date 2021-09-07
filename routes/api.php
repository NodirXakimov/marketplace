<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Protected routes
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->name('logout');
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('create.product');
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});


// Public routes
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register'])->name('register');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');