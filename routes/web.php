<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('products', [ProductController::class, 'viewProducts'])->name('view.products');
});

Route::get('login', [UserController::class, 'viewLogin'])->name('login');
Route::post('login', [UserController::class, 'postLogin'])->name('post.login');
Route::get('logout', [UserController::class, 'Logout'])->name('logout');

Route::get('register', [UserController::class, 'viewRegister'])->name('get.register');
Route::post('register', [UserController::class, 'postRegister'])->name('post.register');
