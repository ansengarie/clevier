<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('home', [FrontendController::class, 'index'])->name('index');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('products', [FrontendController::class, 'products'])->name('products');
Route::get('details/{product:slug}', [FrontendController::class, 'details'])->name('details');
Route::get('categories', [FrontendController::class, 'categories'])->name('categories');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
  return view('pages.dashboard.index', [
    'title' => 'Dashboard'
  ]);
})->middleware('auth');

Route::get('/dashboard/products/checkSlug', [DashboardController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardController::class)->middleware('auth');

//admin
Route::resource('/dashboard/admin-products', AdminProductController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/users', AdminUserController::class)->except('show')->middleware('admin');
