<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/settings', [SettingsController::class, 'index']);
Route::post('/logout', function () {
    dd('logout');
});
