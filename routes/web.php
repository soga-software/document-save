<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TagController;
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

Route::get('index', [DocumentController::class, 'index'])->name('document.index');
Route::post('store', [DocumentController::class, 'store'])->name('document.store');
Route::post('update', [DocumentController::class, 'update'])->name('document.update');
Route::get('destroy', [DocumentController::class, 'destroy'])->name('document.destroy');
// Category routes
Route::get('category/', [CategoryController::class, 'index'])->name('category.index');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
// Tag routes
Route::get('tag/', [TagController::class, 'index'])->name('tag.index');
Route::post('tag/store', [TagController::class, 'store'])->name('tag.store');
Route::post('tag/update', [TagController::class, 'update'])->name('tag.update');
Route::get('tag/destroy/{id}', [TagController::class, 'destroy'])->name('tag.destroy');
// Library routes
Route::get('library/', [LibraryController::class, 'index'])->name('library.index');
Route::post('library/store', [LibraryController::class, 'store'])->name('library.store');
Route::post('library/update', [LibraryController::class, 'update'])->name('library.update');
Route::get('library/destroy/{id}', [LibraryController::class, 'destroy'])->name('library.destroy');