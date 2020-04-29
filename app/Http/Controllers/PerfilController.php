<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {

        $dados['user']= User::all();
        return view('cliente.telaPerfil_cliente', compact('dados'));
    }

    public function findUser($user_id)
    {

        $dados['user']= User::find($user_id);
        return view('cliente.telaPerfil_cliente', compact('dados'));
    }


}
