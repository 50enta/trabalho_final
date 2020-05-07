@extends('event.Inicio-2')

@section('teste')





    <style>


        .panel {

            width: 700px;
            margin-left:60px;
            font-size: 14px;
           /*color:#dd0a37 ;*/

        }

        #form{
    margin-left: 0px;
    /*margin-right: 25px;*/
    height: 400px;
}
    </style>


            <div class=" row " id="#efectuar">

                @if(count($errors)>0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>



                @endif
                @if(\Session::has('success'))
                         <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                    @endif
                <div class="section-title">
                    <br>
                    <h3 class="title"><span>Agendar</span> <span style=" color: #dd0a37;">Evento</span></h3>
                </div>
                <div class="col-md-4 " id="form" style="border-collapse: collapse" >


                    <form  method='POST' action="{{ url('/adicionarReserva') }}" class="">
                        @csrf

                        <div class="form-group col-md-12">
                            <label for="tipo"> Tipo de Evento</label>
                            <select name="tipos_evento_id" type="text" class="form-control" id="tipo" >
                                <option>Seleccione</option>
                                @foreach($dados['tipos'] as $item)
                                    <option value="{{$item->id}}"->{{$item->descricao}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group col-md-12 text-left">

                            <label for="nome "> Descricao do evento</label>

                            <input type= "text" class="form-control" name="descricao" id="descricao"  placeholder=" Descricao">

                        </div>
                        <div class="form-group col-md-12 text-left">
                            <label for="nome"> Data inicio</label>
                            <input type= "datetime-local" class="form-control" name="data_inicio" id="data_inicio"  placeholder=" ">
                        </div>
                        <div class="form-group col-md-12 text-left">
                            <label for="nome"> Data fim</label>
                            <input type= "datetime-local" class="form-control" name="data_fim" id="data_fim"  placeholder=" ">
                        </div>
                        <div class="form-group col-md-12 text-left">
                            <label for="nome"> Cor</label>
                            <input type= "color" class="form-control" name="cor" id="cor"  placeholder=" ">
                        </div>


                        <div class="form-group col-md-12 text-right">
                            <br>

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="add" class="btn btn-success">Adicionar</button>
                        </div>
                    </form>
                    <br>
                    <br>
                </div>



                <div class="col-md-6" >
                    <div class="panel panel-default "  >
                        <div class="panel-heading " ><span style="color: #dd0a37;">Calendario de Eventos</span></div>

                        <div class="panel-body ">
                            {!! $calendar_details->calendar() !!}
                        </div>
                    </div>
                </div>
                <br>

            </div>



    <script>
$('$add').on('click' , function () {

    swal("Here's a message!");

});

    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    {!! $calendar_details->script() !!}

    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

    @endSection

