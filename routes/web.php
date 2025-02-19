<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::controller(ProductController::class)->group(function(){
    Route::post('/products', 'store');
    Route::get('/products', 'index');
});