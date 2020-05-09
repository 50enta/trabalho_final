@extends('home')
@section('base')

    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Visualizar Pedidos de Reserva </h5>

                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <div class="row">
                            <div class="col-lg-12 pb-5">

                                <div class="table-responsive">
                                    <table id="datatable-1" class="table table-datatable table-striped table-hover">


                                            <thead>
                                            <tr>
                                                <th>Nome Cliente</th>
                                                <th>Tipo Evento</th>
                                                <th>Data Inicio</th>
                                                <th>Data Fim</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($dados['eventos'] as $item)

                                            <tr>
                                                <td>{{$item->user_id}}</td>
                                                <td>{{$item->tipos_evento_id}}</td>
{{--                                                <td>--}}
{{--                                                    <span class="badge badge-primary">Disney</span>--}}
{{--                                                </td>--}}
                                                <td>{{$item->data_inicio}}</td>
                                                <td>{{$item->data_fim}}</td>

                                            </tr>
                                           </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
