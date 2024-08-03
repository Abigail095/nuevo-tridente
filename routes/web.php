<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/menu/{category}');

Route::get('menu/dish/{id}');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
    Route::resource('menu', AdminMenuController::class);
});
