<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;

use App\evento;
use App\tipos_evento;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MaddHatter\LaravelFullCalendar\ServiceProvider;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Validator;
use DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados['tipos']=tipos_evento::where('apagado','0')->get();
        $events = Evento::where('status','Aprovado')->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->null,
                true,
                new \DateTime($event->data_inicio),
                new \DateTime($event->data_fim.' +1 day'),
                $event->id,
                [
                    'descricao' =>null,
                    'color' => $event->cor,
                ]

            );
        }

        $calendar_details = Calendar::addEvents($event_list);
        return view('cliente.telaEfectuar_Reserva', compact(['calendar_details','dados']) );
//        return view('cliente.tela_DetalhesEventos', compact('dados'));
//        return view('admin.telaAprovar_Reservas', compact('$calendar_details ') );


    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descricao' => 'required',
            'user_id' => 'required',
            'data_inicio' => 'required',
            'data_fim' => 'required',
            'cor' => 'required',
             'tipos_evento_id' => 'required'

        ]);
        if ($validator->fails()) {
            \Session::flash('warnning','Por favor preecha com dados validos');
            return Redirect::to('/efectuarReserva')->withInput()->withErrors($validator);
        }

        $event = new Evento;
        $event->descricao = $request['descricao'];
        $event->tipos_evento_id = $request['tipos_evento_id'];
        $event->user_id = $request['user_id'];
        $event->data_inicio = $request['data_inicio'];
        $event->data_fim = $request['data_fim'];
        $event->cor = $request->input('cor');
        $event->save();

        \Session::flash('success', 'O seu pedido foi enviado com sucesso, aguarde pela confirmacao!');
        return Redirect::to('/efectuarReserva');




    }


    public function verReservas()
    {
        $data = DB::select("SELECT * FROM eventos INNER JOIN users ON eventos.user_id= users.id INNER JOIN tipos_eventos ON eventos.tipos_evento_id = tipos_eventos.id ;");

        $dados['users']=User::all();
        $dados['eventos']=Evento::all();
        return view('admin.telaVisualizar_reservas',compact('dados'), ['eventos' => $data]);

    }


    public function aprovar($evento_id)
    {
        $evento = Evento::find($evento_id);
        $evento->status = 'Aprovado';
        $evento->save();

        $dados['eventos'] = Evento::all();
        return view('admin.telaAprovar_Reservas', compact('dados'));
    }

    public function reprovar($evento_id)
    {
        $evento = Evento::find($evento_id);
        $evento->status = 'Reprovado';
        $evento->save();

        $dados['eventos'] =Evento::all();
        return view('admin.telaAprovar_Reservas', compact('dados'));
    }

    public function index2()
    {

        $dados['Tipo_eventos']=Tipo_evento::all();
        $dados['Servicos']=Servico::all();
        $dados['Materials']=Material::all();

        return view('admin.telaRegistar_Sevico', compact('dados'));

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
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(evento $evento)
    {
        //
    }
}
