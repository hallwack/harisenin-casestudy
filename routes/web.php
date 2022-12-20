<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product/{slug}', [HomeController::class, 'details'])->name('product.detail');

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
