<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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



Route::get('/indexad', [AdminController::class, 'indexad']);

Route::get('/loginad', [AdminController::class, 'loginad']);

Route::get('/logout', [AdminController::class, 'logout']);


Route::post('login', [AdminController::class, 'login'])->name('login');

// Route::get('/celebs', [MainController::class, 'celebs']);

// Route::get('/movies', [MainController::class, 'movies']);

// Route::get('/tv', [MainController::class, 'tv']);

// Route::get('/add', [MainController::class, 'add']);


Route::get('/list', [ProductController::class, 'list']);

Route::get('/add', [ProductController::class, 'add']);

Route::post('save', [ProductController::class, 'save']);

Route::get('edit/{id}', [ProductController::class, 'edit']);

Route::post('update', [ProductController::class, 'update']);

Route::get('delete/{id}', [ProductController::class, 'delete']);



Route::get('/list_cate', [CategoryController::class, 'list_cate']);

Route::get('add_cate', [CategoryController::class, 'add_cate']);

Route::post('save_cate', [CategoryController::class, 'save_cate']);

Route::get('edit_cate/{categoryid}', [CategoryController::class, 'edit_cate']);

Route::get('update_cate', [CategoryController::class, 'update_cate']);

Route::get('delete_cate/{categoryid}', [CategoryController::class, 'delete_cate']);

//Route::get('list_cate2', [CategoryController::class, 'list_cate2']);

Route::get('add_au', [AuthorController::class, 'add_au']);

Route::get('edit_au/{authorID}', [AuthorController::class, 'edit_au']);

Route::get('update_au', [AuthorController::class, 'update_au']);

Route::post('save_au', [AuthorController::class, 'save_au']);

Route::get('/list_au', [AuthorController::class, 'list_au']);

Route::get('delete_au/{authorID}', [AuthorController::class, 'delete_au']);
