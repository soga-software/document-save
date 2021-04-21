<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
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

Route::get('/', [DocumentController::class, 'index'])->name('document.index');
Route::post('store', [DocumentController::class, 'store'])->name('document.store');
Route::post('update', [DocumentController::class, 'update'])->name('document.update');
Route::post('delete', [DocumentController::class, 'delete'])->name('document.destroy');
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