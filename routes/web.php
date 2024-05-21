<?php
App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
Route::get('report', [ProductController::class, 'report'])->name('products.report');