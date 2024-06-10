<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/layout-user', [UserController::class, 'index'])->name('user.index');


Route::get('/users', [UserController::class, 'search'])->name('user.search');


Route::post('/create-user', [UserController::class, 'create'])->name('user.create');
Route::get('/layout-create', [UserController::class, 'showCreateLayout'])->name('layout.create');


Route::delete('users/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::get('/update-layout/{id}', [UserController::class, 'updateLayout'])->name('update.layout');

Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('update.user');

Route::get("show-user/{id}", [UserController::class, 'showUser'])->name("show.user");


