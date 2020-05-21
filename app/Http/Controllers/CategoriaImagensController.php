<?php

namespace App\Http\Controllers;

use App\categoria_imagens;
use Illuminate\Http\Request;

class CategoriaImagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['categoria']=categoria_imagens::all();
        return view('admin.telaRegistarGaleria', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $results =DB::select("SELECT * FROM galeria_imagems INNER JOIN categoria_imagens ON galeria_imagems.ID = categoria_imagens.ID ;");

        return view('admin.telaRegistarGaleria', ['Categoria_imagens' => $results] );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria_imagens  $categoria_imagens
     * @return \Illuminate\Http\Response
     */
    public function show(categoria_imagens $categoria_imagens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria_imagens  $categoria_imagens
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria_imagens $categoria_imagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria_imagens  $categoria_imagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria_imagens $categoria_imagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria_imagens  $categoria_imagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria_imagens $categoria_imagens)
    {
        //
    }
}
