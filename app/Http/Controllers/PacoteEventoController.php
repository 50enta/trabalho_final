<?php

namespace App\Http\Controllers;

use App\itens_material;
use App\pacote_evento;
use App\servicos;
use Illuminate\Http\Request;

class PacoteEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['pacotes']= pacote_evento::all();
        $dados['Servicos']= servicos::all();
        $dados['itens_servico']= itens_material::all();
        return view('admin.telaRegistar_pacotes', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pacote = new pacote_evento();
        $pacote->descricao = $request->descricao;
        $pacote->inter_inferior = $request->inter_inferior;
        $pacote->inter_superior = $request->inter_superior;
        $pacote->preco = $request->preco;
        $pacote->dia_semana= implode($request->dia_semana, ",");
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
     * @param  \App\pacote_evento  $pacote_evento
     * @return \Illuminate\Http\Response
     */
    public function show(pacote_evento $pacote_evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pacote_evento  $pacote_evento
     * @return \Illuminate\Http\Response
     */
    public function edit(pacote_evento $pacote_evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pacote_evento  $pacote_evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pacote_evento $pacote_evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pacote_evento  $pacote_evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(pacote_evento $pacote_evento)
    {
        //
    }
}
