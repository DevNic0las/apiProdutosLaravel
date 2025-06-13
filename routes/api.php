<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Resources\ProductsCollection;
use App\Http\Resources\ProductsResource;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);


Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('/user', function(Request $request){
    return $request->user();
  });
  Route::post("/products", [ProductsController::class, 'store']);
  Route::get('/products', [ProductsController::class, 'index']);
  Route::get('/products/{id}', [ProductsController::class, 'show']);
  Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
  Route::put('/products/{id}', [ProductsController::class, 'update']);
  Route::post('/products/search',[ProductsController::class, 'searchProduct'] );
  Route::get('/category',[CategoriesController::class ,'index']);
  Route::post('category', [CategoriesController::class, 'store']);
  Route::put('/category/{id}', [CategoriesController::class, 'update']);
  Route::delete('/category/{id}', [CategoriesController::class, 'delete']);

});