<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
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

Route::get('/', [DocumentController::class, 'index']);
Route::post('store', [DocumentController::class, 'store'])->name('document.store');
Route::post('edit', [DocumentController::class, 'edit'])->name('document.edit');
Route::post('delete', [DocumentController::class, 'delete'])->name('document.delete');
// Category routes
Route::get('category/', [CategoryController::class, 'index'])->name('category.index');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');