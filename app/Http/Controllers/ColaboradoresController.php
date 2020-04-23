<?php

namespace App\Http\Controllers;

use App\colaboradores;
use App\galeria_imagem;
use App\imagem_evento;
use Illuminate\Http\Request;

class ColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['Colaboradores']= colaboradores::where('apagado','0')->get();

        return view('admin.telaRegistar_colaboradores', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ev = colaboradores::create(['nome'=>$request->all()['nome'],
            'contacto'=>$request->all()['contacto'],
            'funcao'=>$request->all()['funcao'],

        ]);
        if(!empty($ev)){
            return redirect('/registoColaborador')->with('message', "Sucesso!");
        } else{
            echo "Erro";
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editarCol(Request $request)
    {
        $colaborador = colaboradores::find($request->colaborador_id);
        $colaborador->nome = $request->nome;
        $colaborador->contacto = $request->contacto;
        $colaborador->funcao = $request->funcao;

        if ($colaborador->save()){
            return  redirect('/registoColaborador');
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eliminarCol(Request $request)
    {
        $colaborador = colaboradores::find($request->colaborador_id);

        if (!$colaborador->apagado){
            $colaborador->apagado = '1';
            echo "eliminado com sucesso";
            if ($colaborador->save()){
                redirect('/registoColaborador');
            }
        }else{
            echo "colaborador ja eliminado";
            return;
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function show(colaboradores $colaboradores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function edit(colaboradores $colaboradores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, colaboradores $colaboradores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(colaboradores $colaboradores)
    {
        //
    }
}
