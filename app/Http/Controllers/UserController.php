<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\ProductsResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index() {}

  /**
   * Store a newly created resource in storage.
   */
  public function store(RegisterRequest $registerRequest)
  {
    $data = $registerRequest->validated();
    $data['password'] = Hash::make($data['password']);
    User::create($data);
    return response()->json([
      'message' => "Usuário registrado com sucesso"
    ], 200);
  }

public function login(Request $request)
{
    $data = $request->validate([
      'email' => ['required', 'string', 'email'],
      'password' => ['required', 'string'],
    ]);
    
    $user = User::where('email', $data['email'])->first();

    if (!$user) {
      return response()->json(['error' => 'Usuário não encontrado'], 404);
    }

    if (!Hash::check($data['password'], $user->password)) {
      return response()->json(['error' => 'Senha incorreta'], 401);
    }

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
      'message' => 'Login realizado com sucesso',
      'user' => $user,
      'token' => $token,
    ], 200);
}


  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id) {}

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id) {}
}
