<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);


Route::middleware(['auth:sanctum'])->group(function () {
  Route::post("/products", [ProductsController::class, 'store']);
  Route::get('/products', [ProductsController::class, 'index']);
  Route::get('/products/{id}', [ProductsController::class, 'show']);
  Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
  Route::put('/products/{id}', [ProductsController::class, 'update']);
  Route::post('/products/search',[ProductsController::class, 'searchProduct'] );
});
