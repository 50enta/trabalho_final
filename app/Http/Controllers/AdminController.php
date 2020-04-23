<?php

namespace App\Http\Controllers;


use App\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;

//use Auth;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
//      $this->middleware('auth');
    }

    public function index(){
        $dados['admin']= admin::where('apagado','0')->get();

        return view('admin.tela_inicial', compact('dados'));

    }
    public function register( ){
        return view('auth.register_admin');

    }
    public function createRegister(Request $request){
        $ev = admin::create(['name'=>$request->all()['name'],
            'email'=>$request->all()['email'],
            'password'=>bcrypt($request['password']),

        ]);
        if(!empty($ev)){
            return redirect('/admin/register')->with('message', "Sucesso!");
        } else{
            echo "Erro";
        }
    }
    public function login(){

        return view('auth.login_admin');
    }


    public function postLogin(Request $request )
    {
        $validadator = validator($request->all(),[
            'email' =>'required|string|email|max:255',
            'password' =>'required|string|min:4',
        ]);
//      dd($validadator->fails());
        if($validadator->fails()){
            return redirect('/admin/login')->withErrors($validadator)->withInput();
        }
//        dd($request->get('password'));
        $credentials = ['email'=>$request->get('email'), 'password'=>$request->get('password')];
        if(auth()->guard('admin')->attempt($credentials)){
            return redirect('/admin');
        }else{
            return redirect('/admin/login')
                ->withErrors(['errors'=> 'login invaldo'])
                ->withInput();
        }


    }
    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }

}
