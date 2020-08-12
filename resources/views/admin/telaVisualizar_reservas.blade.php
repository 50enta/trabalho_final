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
                                                @if($item->status == 'Pendente')
                                            <tr style="background-color:#748690">
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->descricao}}</td>
                                                <td>{{$item->data_inicio}}</td>
                                                <td>{{$item->data_fim}}</td>

                                                    <td>{{$item->status}}</td>

                                                <td class="text-left">

                                                    <a class="btn btn-success editbnt center  " data-toggle="modal"
                                                       data-target="#mod-apr-{{$item->id}}" onchange="desable()">
                                                        <i class="batch-icon batch-icon-tick"></i>
                                                    </a>
                                                    <a class="btn btn-danger deletebnt center " data-toggle="modal"
                                                       data-target="#mod-rep-{{$item->id}}">
                                                        <i class="batch-icon batch-icon-cross "></i>
                                                    </a>

                                            </tr>
                                                @else
                                                    <tr >
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->descricao}}</td>
                                                        <td>{{$item->data_inicio}}</td>
                                                        <td>{{$item->data_fim}}</td>

                                                        <td>{{$item->status}}</td>

                                                        <td class="text-left">
                                                            @if(  $item->status == 'Pendente')
                                                                <a class="btn btn-success editbnt center  " data-toggle="modal"
                                                                   data-target="#mod-apr-{{$item->id}}" id="aprovar" onclick="desable()">
                                                                    <i class="batch-icon batch-icon-tick"></i>
                                                                </a>

                                                                <a class="btn btn-danger deletebnt center " data-toggle="modal"
                                                                   data-target="#mod-rep-{{$item->id}}" id="reprovar" onclick="desable()">
                                                                    <i class="batch-icon batch-icon-cross "></i>
                                                                </a>
                                                            @endif
                                                    </tr>
                                                @endif
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

    {{-- start modal Aprovar--}}
    @foreach($eventos as $key)
        <div class="modal fade" id="mod-apr-{{$key->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form method="POST" action="{{ url('/aprovarReserva/'.$key->id)}}">
                    {{csrf_field() }}

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aprovar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que pretende Aprovar esse evento {{$key->descricao}} - {{$key->id}}?
                        </div>
                        <div style="display: none;">
                            <input name="evento_id" value="{{$key->id}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nao</button>
                            <button type="submit" class="btn btn-primary">Sim</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    @endforeach
    {{-- start modal Reprovar--}}
    @foreach($eventos as $key)
        <div class="modal fade" id="mod-rep-{{$key->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form method="POST" action="{{ url('/reprovarReserva/'.$key->id)}}">
                    {{csrf_field() }}

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reprovar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que pretende Reprovar esse evento {{$key->descricao}} - {{$key->id}}?
                        </div>
                        <div style="display: none;">
                            <input name="evento_id" value="{{$key->id}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nao</button>
                            <button type="submit" class="btn btn-primary">Sim</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    @endforeach
{{--end modalreprovar--}}


    <script>
function desable() {
   $status = eventos::find($id)


    let status = $('td[name=status]').html();
   if(status === 'Pendente'){
       document.getElementById('aprovar').disabled= false;
       document.getElementById('reprovar').disabled= false;
   }else
       if(status === 'Aprovado'){
           document.getElementById('aprovar').disabled= true;
           document.getElementById('reprovar').disabled= true;
   }else{
           document.getElementById('aprovar').disabled= true;
           document.getElementById('reprovar').disabled= true;
       }
}
    </script>

@endsection
