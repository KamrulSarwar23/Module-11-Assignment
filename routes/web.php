<?php

use App\Http\Controllers\StoreKeeperController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/',[StoreKeeperController::class, 'index'])->name('dashboard');


Route::get('delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
Route::resource('products', ProductController::class);

Route::get('manage/sale',[ProductController::class, 'manageSale'])->name('manage.sale');
Route::post('update/sale/{quantity}',[ProductController::class, 'updateSale'])->name('update.sale');
Route::post('sale/history',[ProductController::class, 'saleHistory'])->name('sale.history');

