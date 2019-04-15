<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\models\Usuario;

class AutenticacaoController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('auth.login');
    }

    public function logar(Request $request)
    {
        $dados = $request->all();

        $usuario = $dados['usuario'];
        $senha = $dados['senha'];
        $u = Usuario::where('usuario', $usuario)->first();

        if (Auth::check() || ($u && Hash::check($senha, $u->senha))) {
            Auth::login($u);
            //Pegar outros dados do usuário e salva na sessao
            session()->put('nomecompletousuario', $u->usuario);

            return redirect(route('home'));
        } else {
            return back()->with('message', 'Usuário ou senha incorreto, verifique suas credenciais.')->withErrors($usuario)->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
