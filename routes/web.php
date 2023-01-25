<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/redirect',         [HomeController::class, 'redirect']);
    Route::get('/dashboard',        [UserController::class, 'index'])->name('dashboard');
}); 

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/admin-dashboard',  [AdminController::class, 'index'])->name('admin.dashboard');
 });

