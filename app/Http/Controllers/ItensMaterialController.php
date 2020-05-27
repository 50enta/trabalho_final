<?php

namespace App\Http\Controllers;

use App\categoria_itens;
use App\itens_material;
use Illuminate\Http\Request;
use DB;
class ItensMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['itens']=itens_material::where('apagado','0')->get();
        $dados['categoria_itens']=categoria_itens::where('apagado','0')->get();

        $data = DB::select("SELECT Itens.id, Itens.descricao, Itens.quantidade, Categorias.descricao FROM itens_materials as Itens INNER JOIN categoria_itens as Categorias ON Itens.categoria_itens_id = Categorias.id;");

        return view('admin.telaRegistar_itensMaterias', compact('dados'), ['itens_materials' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ev=itens_material::create([


            'descricao' =>$request->descricao,
            'quantidade'=>$request->quantidade,
            'formato' =>$request->formato,
            'capacidade'=>$request->capacidade,
            'cor' =>$request->cor,
            'categoria_itens_id'=>$request->categoria,


        ]);

        if(!empty($ev)){
            return redirect('/registoItens')->with('message', "Sucesso!");
        } else{
            echo "Erro";
        }
    }




    public function editarItens(Request $request)
    {
        $itens = itens_material::find($request->itens_material_id);
        $itens->descricao = $request->descricao;
        $itens->quantidade = $request->quantidade;


        if( $itens->save()){
            return  redirect('/registoItens');
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }

public function eliminarItens(Request $request)
{
    $itens = itens_material::find($request->itens_material_id);

    if (!$itens->apagado){
        $itens->apagado = '1';
//            echo "eliminado com sucesso";
        if ($itens->save()){
            return redirect('/registoItens');
        }
    }else{
        echo "item ja eliminado";
        return;
    }
    echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
}




/**
     * Display the specified resource.
     *
     * @param  \App\itens_material  $itens_material
     * @return \Illuminate\Http\Response
     */
    public function show(itens_material $itens_material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\itens_material  $itens_material
     * @return \Illuminate\Http\Response
     */
    public function edit(itens_material $itens_material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\itens_material  $itens_material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, itens_material $itens_material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\itens_material  $itens_material
     * @return \Illuminate\Http\Response
     */
    public function destroy(itens_material $itens_material)
    {
        //
    }
}
