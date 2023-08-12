<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegistroRequest $request) {
        // Validar el registro
        $data = $request->validated();
        
        //Crear el Usuario 
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        // Retornar una respuesta
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }
    public function login(LoginRequest $request) {
        // return "desde login";
        $data = $request->validated();

        //Revisar el password        
        if(!Auth::attempt($data)){
            return response([
                'errors' => ['El Email o el Password son Incorrectos']
            ], 422);
        }

        // Autenticar al Usuario
        $user = Auth::user();
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }
    public function logout(Request $request) {
        // return 'Logout...';
        $user = $request->user();
        $user -> currentAccessToken()->delete();

        return [
            'user' => null
        ];
    }
}
