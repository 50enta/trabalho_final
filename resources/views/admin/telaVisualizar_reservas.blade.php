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
                                    <table  id="datatable-1" class=" table table-datatable table-bordered" >




                                    <thead class="thead-light">
                                            <tr>
                                                <th>Nome Cliente</th>
                                                <th>Tipo Evento</th>
                                                <th>Data Inicio</th>
                                                <th>Data Fim</th>
                                                <th name="status">status</th>
                                                <th>...</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($eventos as $item)

                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->descricao}}</td>
                                                <td>{{$item->data_inicio}}</td>
                                                <td>{{$item->data_fim}}</td>
                                                <td>

                                                @if($item->status==='Pendente')
                                                  Pendente
                                                @elseif($item->status==='Aprovado')
                                                    Aprovado
                                                @else
                                                    Reprovado
                                                @endif
                                                </td>
                                                <td class="text-left">

                                                    <a class="btn btn-success editbnt center " >Apagar</a>
                                                    <a class="btn btn-success  center " >Aprovar</a>
                                                    <a class="btn btn-danger center " >Reprovar</a>


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





    <script>

    </script>

@endsection
