<?php

use App\Http\Controllers\View\DocumentView;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Api\DocumentApi;
use App\Http\Controllers\View\ImportView;
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

// Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes....
]);


Route::group(['middleware' => 'auth'], function () {
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

    // Library routes
    Route::get('import/', [ImportView::class, 'index'])->name('import.index');
    // Route::post('library/store', [LibraryController::class, 'store'])->name('library.store');
    // Route::post('library/update', [LibraryController::class, 'update'])->name('library.update');
    // Route::get('library/destroy/{id}', [LibraryController::class, 'destroy'])->name('library.destroy');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [DocumentView::class, 'index'])->name('document.index');
    Route::get('index', [DocumentView::class, 'index'])->name('document.index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'api'], function () {
        Route::get('index', [DocumentApi::class, 'fetchData'])->name('api.document.index');
        Route::post('store', [DocumentApi::class, 'store'])->name('api.document.store');
        Route::post('update', [DocumentApi::class, 'update'])->name('api.document.update');
        Route::post('destroy', [DocumentApi::class, 'destroy'])->name('api.document.destroy');
    });
});
