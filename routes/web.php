<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::prefix('admin')->group(function () {
    Route::get('/layout-user', [UserController::class, 'index'])->name('user.index');
    Route::get('/users', [UserController::class, 'search'])->name('user.search');
    Route::post('/create-user', [UserController::class, 'store'])->name('user.create');
    Route::get('/layout-create', [UserController::class, 'create'])->name('layout.create');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/update-layout/{id}', [UserController::class, 'edit'])->name('update.layout');
    Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update.user');
    Route::get("show-user/{id}", [UserController::class, 'show'])->name("show.user");
});
Route::prefix('dashboard')->group(function () {
    Route::get("/", [DashboardController::class, 'index'])->name("dasboard.index");
});