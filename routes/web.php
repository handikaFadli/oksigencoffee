<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
  return view('home');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/detail/{product:slug}', [ShopController::class, 'show']);


Route::get('/admin', function () {
  return view('admin.home-admin');
});
Route::resource('/admin/product', ProductController::class);
