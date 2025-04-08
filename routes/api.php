<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [RegisterController::class, 'create']);
Route::post('login', [LoginController::class, 'login']);

// Защищенные маршруты (требуют Sanctum аутентификации)
Route::middleware('auth:sanctum')->group(function () {
    // Аутентификация
    Route::post('logout', [LoginController::class, 'logout']);
    // Route::get('/user', [AuthController::class, 'user']);
    
    // Задачи
    Route::apiResource('tasks', TaskController::class);
    Route::get('tasks/status/{status}', [TaskController::class, 'getByStatus']);
    Route::get('tasks/search/{query}', [TaskController::class, 'search']);
});
