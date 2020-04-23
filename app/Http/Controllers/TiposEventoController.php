<?php

namespace App\Http\Controllers;

use App\galeria_imagem;
use App\tipos_evento;
use Illuminate\Http\Request;

class TiposEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['tipo_eventos']=tipos_evento::where('apagado','0')->get();
        return view('admin.telaRegistar_tipoEvento', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayInicio()
    {

        $dados['tipo_eventos']=tipos_evento::where('apagado','0')->get();
        $dados['imagem']=galeria_imagem::where('apagado','0')->get();
        return view('event.Inicio', compact('dados'));
    }

    public function mostrarDetalhes()
    {
        $dados['tipo_eventos']=tipos_evento::where('apagado','0')->get();
        return view('cliente.tela_DetalhesEventos', compact('dados'));
    }

    public function create(Request $request)
    {
        $tipoEvento = new tipos_evento();
        $tipoEvento->descricao=$request->input('descricao');
        $tipoEvento->comentario=$request->input('comentario');


        if ($request->hasfile('image')){

            $file=$request->file('image');
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $fileName);
            $tipoEvento->image=$fileName;

        }
        $tipoEvento->save();

        return redirect('/registoTipoEvento')->with('message', "Sucesso!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarTipoEvento(Request $request)
    {
        $tipoEvento = tipos_evento::find($request->tipo_evento_id);
        $tipoEvento->descricao = $request->descricao;
        $tipoEvento->comentario=$request->comentario;

        if ($request->hasfile('image')){

            $file=$request->file('image');
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $fileName);
            $tipoEvento->image=$fileName;

        }
//O fim de uma carreira estudantil seja ela de que nivel for e sempre um marco importante na vida do estudante
        if ($tipoEvento->save()){
            return  redirect('/registoTipoEvento');
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }

    public function store(Request $request)
    {
        //
    }

    public function eliminarTipoEvento(Request $request)
    {
        $tipoEvento = tipos_evento::find($request->tipo_evento_id);

        if (!$tipoEvento->apagado){
            $tipoEvento->apagado = '1';
//            echo "eliminado com sucesso";
            if ($tipoEvento->save()){
                return redirect('/registoTipoEvento');
            }
        }else{
            echo "tipo ja eliminado";
            return;
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }

    public function update(Request $request, tipos_evento $tipos_evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipos_evento  $tipos_evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipos_evento $tipos_evento)
    {
        //
    }
}
