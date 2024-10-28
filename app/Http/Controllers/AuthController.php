<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Hash é para criptografia
use Illuminate\Support\Facades\Auth; // Conter todos os usuários logados
use Illuminate\Validation\ValidationException;;



class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validação dos dados
        // validate é tipo if e valida se usuário tem os dados
        $validatedData = $request->validate([ 
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Função de criptografia
        ]);

      
        // Redirecionar ou retornar uma resposta
        return redirect()->route('login');
       
    }

    public function login(Request $request)
{
    // Validação dos dados
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Verificar as credenciais e autenticar o usuário
    if (Auth::attempt($credentials)) {
        // Login bem-sucedido
        $request->session()->regenerate();

        return redirect()->intended('admin');
    }

    // Se as credenciais estiverem erradas
    return back()->withErrors([
        'email' => 'As credenciais fornecidas estão incorretas.',
    ]);


  
}
public function logout (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login'); // Redireciona para a página de login
}
}
