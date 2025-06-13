<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function index()
  {
    $data = Categories::all();
    return response()->json($data);
  }
  public function store(Request $request)
  {
    $data = $request->validate(['categorie_name' => ['required', 'string', 'max:255']]);
    Categories::create($data);
    return response()->json($data, 200);
  }
  public function delete(String $id)
  {
    $category = Categories::findOrfail($id);
    $category->delete();
    return response()->json(['message' => 'sucess'], 200);
  }
  public function update(Request $request, String $id)
  {
    $category = Categories::findOrFail($id);
    $data = $request->validate([
      'categorie_name' => ['sometimes', 'string', 'max:255']
    ]);
    $category->update([
      'categorie_name' => $data['categorie_name']
    ]);
    return response()->json(['message' => 'Categoria atualizada com sucesso'], 200);
  }
}
