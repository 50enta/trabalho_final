<?php

namespace App\Http\Controllers;

use App\User;
//use Cassandra\Session;
use Auth;
use Session;
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


    public function testeUpdate(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'apelido'=>'required',
            'email'=>'required|email',
            'telefone'=>'required',

            ]);
            $user = Auth::user();

//       if($request->hasFile('avatar')){
//           $avatar =$request->avatar;
//           $avatar_new_name =time().$avatar->getClientOriginalName();
//           $avatar->move('images/avatars' , $avatar_new_name);
//           $user->save();
//
//       }
            $user->name=$request->name;
            $user->apelido=$request->apelido;
            $user->email=$request->email;
            $user->telefone=$request->telefone;
            $user->save;

            if($request->has('password')){
                $user->password = bcrypt($request->password);

            }
            Session::flash('success', 'conta autualizada');
            return redirect()->back();
    }


//    public function updatePerfil (Request $request){
//
//        $data = $request->all();
//        if($data['password'] !=null)
//            $data['password'] =bcrypt($data['password']);
//            else
//            unset($data['password']);
//            $update = auth()->user()->update($data);
//
//            if($update)
//                return redirect()->route('/perfil/'.auth()->user()->id)->with('success', 'sucesso ao actualizar');
//            return redirect()->back()->with('error', 'falha ao actualizar');
//    }


    public function edit(){
        if(Auth::user()){
            $user =User::find(Auth::user()->id);
            if($user){
                return view('cliente.telaPerfil_cliente' )->withUser();

            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
    public function update(Request $request){

        $user =User::find(Auth::user()->id);
        if($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {
                $validadte = $request->validate([
                    'name' => 'required|min:2',
                    'apelido' => 'required|min:2',
                    'telefone' => 'required|min:9',
                    'email' => 'required|email',
                    'password' => 'required|min:6',
                ]);
            } else {
                    $validadte = $request->validate([
                    'name' => 'required|min:2',
                    'apelido' => 'required|min:2',
                    'telefone' => 'required|min:9',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:6',

                ]);
            }
//            if ($validate) {
                $user->name = $request['name'];
                $user->apelido = $request['apelido'];
                $user->email = $request['email'];
                $user->telefone = $request['telefone'];

                if($request->has('password')){
                    $user->password = bcrypt($request->password);

                }

                $user->save();


                $request->session()->flash('success', 'dados actualizados com sucesso');
                return redirect()->back();
//                }else{
//                    return redirect()->back();
//                }
            }else{
                return redirect()->back();
            }
    }


}

