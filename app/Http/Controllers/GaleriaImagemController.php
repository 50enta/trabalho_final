<?php

namespace App\Http\Controllers;

use App\categoria_imagens;
use App\galeria_imagem;
use Illuminate\Http\Request;
use DB;

class GaleriaImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados['imagem']= galeria_imagem::where('apagado','0')->get();
        $dados['categoria'] =categoria_imagens::where('apagado','0')->get();



        $data = DB::select("SELECT * FROM galeria_imagems INNER JOIN categoria_imagens 
            ON galeria_imagems.categoria_imagens_id = categoria_imagens.id ;");

//        var_dump($data);
        return view('admin.telaRegistarGaleria', compact('dados'), ['galeria_imagems' => $data] );


    }


    public function displayGaleria()
    {

        $dados['imagem']=galeria_imagem::where('apagado','0')->get();

        return view('cliente.galeria', compact('dados'));
    }
//    public function index2()
//    {    $dados['imagem']=galeria_imagem::where('apagado','0')->get();
//        return view('event.Inicio', compact('dados'));
//    }

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
        $galeria= new galeria_imagem();
        $galeria->categoria_imagens_id = $request->get('categoriaImagem');
        $galeria->evento_id = 1; //tenho que add um evento


        if ($request->hasfile('image')){

            $file=$request->file('image');
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $fileName);
            $galeria->image=$fileName;

        }
       $galeria->save();

        return redirect('/galeria')->with('message', "Sucesso!");


    }
    public function buscar(){

        $data = DB::select("SELECT * FROM galeria_imagems INNER JOIN categoria_imagens 
   ON galeria_imagems.ID = categoria_imagens.ID ;");

        return view('admin.telaRegistarGaleria', ['galeria_imagens' => $data] );
        var_daump($data);
    }





    public function editarImagem(Request $request)
    {
        $imagem = galeria_imagem::find($request->imagem_id);
        $imagem->image = $request->image;
        $imagem->categoria_imagem= $request->categoriaImagem;



        if ($imagem->save()){
            return  redirect('/galeria');
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }



    public function eliminarImagem(Request $request)
    {
        $imagem = galeria_imagem::find($request->imagem_id);

        if (!$imagem->apagado){
            $imagem->apagado = '1';
//            echo "eliminado com sucesso";
            if ($imagem->save()){
                return redirect('/galeria');
            }
        }else{
            echo "imagem  eliminado";
            return;
        }
        echo "Oopp's!! Ocorreu algum erro, por favor reinicie o sistema e volte a tentar...";
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\galeria_imagem  $galeria_imagem
     * @return \Illuminate\Http\Response
     */
    public function show(galeria_imagem $galeria_imagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galeria_imagem  $galeria_imagem
     * @return \Illuminate\Http\Response
     */
    public function edit(galeria_imagem $galeria_imagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galeria_imagem  $galeria_imagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeria_imagem $galeria_imagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galeria_imagem  $galeria_imagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeria_imagem $galeria_imagem)
    {
        //
    }
}
