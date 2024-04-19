<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class , 'index'])->name('home');


Auth::routes();



// admin area

Route::get('/admin/dashboard' , [ProductController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/dashboard/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/dashboardcreate', [ProductController::class, 'store'])->name('admin.product.store');