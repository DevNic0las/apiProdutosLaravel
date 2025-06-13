<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return  ProductsResource::collection(Product::with("categories")->get());
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data = $request->validate([
      'product_name' => ['required', 'string', 'max:255'],
      'price' => ['required', 'numeric'],
      'amount' => ['required', 'numeric'],
      'categories_id' => ['required', 'numeric']
    ]);
    $slug = Str::slug($data['product_name']);

    $createProduct = Product::create([
      'product_name' => $data['product_name'],
      'price' => $data['price'],
      'amount' => $data['amount'],
      'slug' => $slug,
      'categories_id' => $data['categories_id']
    ]);
    return new ProductsResource($createProduct);
  }


  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $productFind = Product::findOrFail($id);
    return new ProductsResource($productFind);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $ProductEdit = Product::findOrFail($id);
    $data = $request->validate([
      'product_name' => ['sometimes', 'string', 'max:255'],
      'price' => ['sometimes', 'numeric'],
      'amount' => ['sometimes', 'numeric'],
    ]);
    $slug = Str::slug($data['product_name']);
    $ProductEdit->update([
      'product_name' => $data['product_name'],
      'price' => $data['price'],
      'amount' => $data['amount'],
      'slug' => $slug,
    ]);
    return new ProductsResource($ProductEdit);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $productDeleted = Product::findOrFail($id);
    $productDeleted->delete();
    return new ProductsResource($productDeleted);
  }
  public function searchProduct(Request $request)
  {
    $data = $request->input('product_name');
    $product = Product::where('product_name', 'LIKE', $data . "%")->first();
    return new ProductsResource($product);
  }
}
