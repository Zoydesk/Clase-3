<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [PRoductController::class, 'index']);


Route::prefix('products')->controller(ProductController::class)->group(function () {

    Route::get('/', 'index');

    Route::get('/create',  'create');

    Route::get('/{id}/{category}', 'detail');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'welcome']);

Route::prefix('admin')->group(function(){
   Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::get('/categories', [CategoryController::class, 'create'])->name('admin.categories.create');
});
