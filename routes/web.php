<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [MainController::class, 'index'])->name('main.page');

Route::prefix('category')->group(function() {
    Route::get('/{category}', [CategoryController::class, 'page'])->name('category.page');
});


Route::get('/post/{post}', [PostController::class, 'page'])->name('post.page');

//middleware
Route::prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('category')->group(function() {
        Route::get('/', [AdminController::class, 'categoryList'])->name('admin.category.list');
        Route::get('/add', [AdminController::class, 'categoryAdd'])->name('admin.category.addPage');
        Route::post('/add', [CategoryController::class, 'add'])->name('admin.category.add');
    });

    Route::prefix('posts')->group(function() {
        Route::get('/', [AdminController::class, 'postList'])->name('admin.post.list');
        Route::get('/add', [AdminController::class, 'postAdd'])->name('admin.post.addPage');
        Route::post('/add', [PostController::class, 'add'])->name('admin.post.add');
    });
});