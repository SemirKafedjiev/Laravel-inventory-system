<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('//', function () {return ('DDD');});
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class,'store']);
Route::get('/products', [ProductController::class,'index']);
Route::get('products/{product}/edit' , [ProductController::class,'edit']);
Route::put('products/{product}', [ProductController::class,'update']);
Route::delete('products/{product}/delete', [ProductController::class,'destroy']);