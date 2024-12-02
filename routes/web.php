<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('login', [UserController::class, 'viewLogin'])->name('user.login');

Route::get('register', [UserController::class, 'viewRegister'])->name('user.register');
Route::post('register', [UserController::class, 'postRegister'])->name('user.post');

Route::get('products', [ProductController::class, 'viewProducts'])->name('view.products');
