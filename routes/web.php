<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', [MenuController::class, 'index'])->name('index');

Route::get('/menu/{category}', [MenuController::class, 'showByCategory'])->name('category');

Route::post('/show-dishes', [MenuController::class, 'showDishes'])->name('categories.index');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('login', [AuthController::class, 'login'])->name('admin.login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminMenuController::class, 'index'])->name('name.dashboard');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::resource('menu', AdminMenuController::class);
});
