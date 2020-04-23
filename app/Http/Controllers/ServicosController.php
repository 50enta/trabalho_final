<?php

namespace App\Http\Controllers;

use App\servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['Servicos']=servicos::where('apagado','0')->get();

        return view('admin.telaRegistar_servicos', compact('dados'));



    }
    public function index2()
    {
        $dados['Servicos']=servicos::where('apagado','0')->get();

        return view('event.inicio', compact('dados'));
    }

    public function detalheServico($servico_id)
    {
        $dados['Servicos']=servicos::find($servico_id);

        return view('cliente.servicos.servicoDetalhes', compact('dados'));
    }


    public function create(Request $request)
    {
        $servico= new servicos();
        $servico->descricao=$request->input('descricao');

//        if ($request->hasfile('image')){
//
//            $file=$request->file('image');
//            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
//            request()->image->move(public_path('images'), $fileName);
//            $servico->image=$fileName;
//
//        }else{
//            return $request;
//            $servico->image='';
//
//        }
        $servico->save();

        return redirect('/registoServico')->with('message', "Sucesso!");

    }




    public function display(){

        $dados['Servicos']=servicos::where('apagado','0')->get();

        return view('admin.telaRegistar_servicos', compact('dados'));

    }


    public function editarServico(Request $request)
    {
        $servico = servicos::find($request->servicos_id);
        $servico->descricao = $request->descricao;




        if( $servico->save()){
            return  redirect('/registoServico');
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }

    public function store(Request $request)
    {
        //
    }

    public function eliminarServico(Request $request)
    {
        $servico = servicos::find($request->categoria_itens_id);

        if (!$servico->apagado){
            $servico->apagado = '1';
//            echo "eliminado com sucesso";
            if ($servico->save()){
                return redirect('/registoServico');
            }
        }else{
            echo "Categoria ja eliminado";
            return;
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servicos $servicos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(servicos $servicos)
    {
        //
    }
}
