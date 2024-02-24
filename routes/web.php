<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\WelcomController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\WelcomController::class, 'product'])->name('product');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');

//route product
Route::get('/create-product', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/create-product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::put('/product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');

//dibawah ini bawaan laravel
// Route::resource('product', ProductController::class);