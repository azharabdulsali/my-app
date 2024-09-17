<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/about', function () {
    return view('about');
});

// Admin
Route::get('/admin/product', [AdminProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin/product/create', [AdminProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product', [AdminProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin/product/{id}/update', [AdminProductController::class, 'update'])->name('admin.product.update');
Route::get('/admin/product/{id}/delete', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');

