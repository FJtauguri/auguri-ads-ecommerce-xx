<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('client.client-home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Categ
    Route::get('category', [App\Http\Controllers\Admin\AddController::class, 'index']);
    Route::get('category/create', [App\Http\Controllers\Admin\AddController::class, 'create']);
    Route::post('category/create', [App\Http\Controllers\Admin\AddController::class, 'store']);
    Route::get('category/create/{id}', [App\Http\Controllers\Admin\AddController::class, 'delete']);
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\AddController::class, 'edit'])->name('admin.category.edit');
    Route::put('category/edit/{id}', [App\Http\Controllers\Admin\AddController::class, 'edit_me'])->name('admin.category.update');
    // Route::post('category/see', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('stored');

    // products
    Route::get('product/productCreate', [App\Http\Controllers\Admin\ProductController::class, 'product_index']);
});
