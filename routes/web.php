<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminController;

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
Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function() {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::prefix('category')->name('category.')->group(function() {
        Route::get('/', [AdminController::class, 'categoryList'])->name('list');
        Route::get('/add', [AdminController::class, 'categoryAdd'])->name('addPage');
        Route::post('/add', [CategoryController::class, 'add'])->name('add');
    });

    Route::prefix('posts')->name('post.')->group(function() {
        Route::get('/', [AdminController::class, 'postList'])->name('list');
        Route::get('/add', [AdminController::class, 'postAdd'])->name('addPage');
        Route::post('/add', [PostController::class, 'add'])->name('add');
    });
});