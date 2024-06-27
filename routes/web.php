<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ResetPasswordController as AuthResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\RegisteredUserController;




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->middleware(AdminMiddleware::class)->group(function () {
    Route::get('/layout-user', [UserController::class, 'index'])->name('user.index');
    Route::get('/users', [UserController::class, 'search'])->name('user.search');
    Route::post('/create-user', [UserController::class, 'store'])->name('user.create');
    Route::get('/layout-create', [UserController::class, 'create'])->name('layout.create');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/update-layout/{id}', [UserController::class, 'edit'])->name('update.layout');
    Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update.user');
    Route::get("show-user/{id}", [UserController::class, 'show'])->name("show.user");
    Route::get('/error', [UserController::class, 'error'])->name('user.error');
});
Route::prefix('dashboard')->group(function () {
    Route::get("/", [DashboardController::class, 'index'])->middleware(AdminMiddleware::class)->name("dashboard");
    Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});


Route::prefix('product')->middleware(AdminMiddleware::class)->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/error', [ProductController::class, 'error'])->name('product.error');
});
Route::prefix('category')->middleware(AdminMiddleware::class)->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/error', [CategoryController::class, 'error'])->name('category.error');
});
Route::prefix('cart')->group(function () {
    Route::get("/", [CartController::class, 'index'])->name("cart.index");
    Route::delete("/delete/{id}", [CartController::class, 'destroy'])->name("cart.delete");
    Route::get("/create/{id}", [CartController::class, 'create'])->name("cart.create");
    Route::get("/show-product-dashboard", [ProductController::class, 'showProduct'])->name("show.product-dasboard");
    Route::get("/show-product-detail/{id}", [ProductController::class, 'showProductDetail'])->name("show.product-detail");
    Route::get("/search", [ProductController::class, 'search'])->name("product.search");
    Route::post("/order", [CartController::class, 'placeOrder'])->name("order");
});
