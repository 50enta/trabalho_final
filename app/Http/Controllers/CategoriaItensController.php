<?php

namespace App\Http\Controllers;

use App\categoria_itens;
use Illuminate\Http\Request;

class CategoriaItensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['categoria_itens']=categoria_itens::where('apagado','0')->get();

        return view('admin.telaRegistar_categoriaItens', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ev=categoria_itens::create(['descricao' =>$request->descricao
//

        ]);
        if(!empty($ev)){
            return redirect('/registoCategoriaItens')->with('message', "Sucesso!");
        } else{
            echo "Erro";
        }
    }

    public function editarCategoriaItens(Request $request)
    {
        $categoria_itens = categoria_itens::find($request->categoria_itens_id);
        $categoria_itens->descricao = $request->descricao;


        if( $categoria_itens->save()){
            return  redirect('/registoCategoriaItens');
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }




    public function store(Request $request)
    {
        //
    }

    public function eliminarCategoriaItens(Request $request)
    {
        $categoria_itens = categoria_itens::find($request->categoria_itens_id);

        if (!$categoria_itens->apagado){
            $categoria_itens->apagado = '1';
//            echo "eliminado com sucesso";
            if ($categoria_itens->save()){
                return redirect('/registoCategoriaItens');
            }
        }else{
            echo "Categoria ja eliminado";
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

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria_itens  $categoria_itens
     * @return \Illuminate\Http\Response
     */
    public function show(categoria_itens $categoria_itens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria_itens  $categoria_itens
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria_itens $categoria_itens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria_itens  $categoria_itens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria_itens $categoria_itens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria_itens  $categoria_itens
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria_itens $categoria_itens)
    {
        //
    }
}
