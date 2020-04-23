<?php

namespace App\Http\Controllers;


use App\imagem_evento;
use Illuminate\Http\Request;

class ImagemEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['imagem']= imagem_evento::all();
        return view('admin.telaRegistarGaleria', compact('dados'));

    }




    public function index2()
    {    $dados['imagem']=imagem_evento::where('apagado','0')->get();
        return view('event.inicio');
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
        $galeria= new imagem_evento();
        $galeria->image=$request->input('image');
        $galeria->categoria_imagens_id = $request->get('categoriaImagem');
        $galeria->evento_id = 1;


        if ($request->hasfile('image')){

            $file=$request->file('image');
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $fileName);
            $galeria->image=$fileName;

//        }else{
//            return $request;
//            $galeria->image='';

        }
        $galeria->save();

        return redirect('/galeria')->with('message', "Sucesso!");

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\imagem_evento  $imagem_evento
     * @return \Illuminate\Http\Response
     */
    public function show(imagem_evento $imagem_evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imagem_evento  $imagem_evento
     * @return \Illuminate\Http\Response
     */
    public function edit(imagem_evento $imagem_evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imagem_evento  $imagem_evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imagem_evento $imagem_evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imagem_evento  $imagem_evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(imagem_evento $imagem_evento)
    {
        //
    }
}
