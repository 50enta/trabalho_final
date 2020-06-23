@extends('home')
@section('base')

    <!-- Start XP Row -->
    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Registar Servicos de Eventos </h5>

                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addmodal">adicionar</button>


                            </div>
                        </div>



                    </div>

                </div>

                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">




                        <div class="table-responsive">
                            <table  id="datatable-1" class=" table table-datatable table-bordered" >

                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>

                                    <th>Descricao</th>

                                    <th class="">Operacoes</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dados['Servicos'] as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->descricao}}</td>
                                        <td class="text-right">
{{--                                            <a class="btn btn-primary detbnt center " data-toggle="modal" data-target="#mod-{{$item->id}}" >--}}
{{--                                                <i class="batch-icon batch-icon-eye" ></i>--}}
{{--                                            </a>--}}
                                            <a class="btn btn-success editbnt center  " data-toggle="modal"  data-target="#mod-edit-{{$item->id}}">
                                                <i class="batch-icon batch-icon-pen"></i>
                                            </a>
                                            <a class="btn btn-danger deletebnt center " data-toggle="modal" data-target="#mod-del-{{$item->id}}">
                                                <i class="batch-icon batch-icon-bin-alt-2 "></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>



        {{--    START MODAL ADICIONAR--}}
        <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">


                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Servicos de evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form  method="POST" action="{{ url('/adicionarServico') }}" enctype="multipart/form-data">
                        {{csrf_field() }}
                        <br>
                        <div class="form-group col-10">
                            <label for="descricao"> Descricao</label>
                            <input class="form-control" name="descricao" id="descricao"  placeholder=" "></input>

                        </div>


                        {{--                    <div class="form-group col-8">--}}
                        {{--                        <label for="descricao"> Comentario</label>--}}
                        {{--                        <textarea class="form-control" name="comentario" id="comentario" rows="3" placeholder=" "></textarea>--}}

                        {{--                    </div>--}}

                        <br>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Sim</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        {{--    END MODAL ADICIONAR--}}

        {{--   form  show modal--}}
        @foreach($dados['Servicos'] as $key)

            <div id="mod-{{$key->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"></h4>

                        </div>
                        <div class="modal-body">
                            <p>Descricao: {{$key->descricao}}</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="bnt bnt-earning" data-dismiss="modal">
                                <span class="glyphicon glyphcon-remove"></span> close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{--end show modal--}}

        {{-- start edit modal --}}
        @foreach($dados['Servicos'] as $key)
            <div class="modal fade" id="mod-edit-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                    <form  method="POST" action="{{ url('/editarServico') }}">
                        {{csrf_field() }}

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">editar Tipo de evento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-lg-6">


                                        <div class="form-group">
                                            <label for="descricao"> Descricao</label>
                                            <input class="form-control" name="descricao"  value="{{$key->descricao}}"></input>

                                        </div>
                                        <br>

                                        <div style="display: none">
                                            <input name="servicos_id"  value="{{$key->id}}"></input>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

        {{--    end edit modal--}}


        {{-- start modal delete--}}
        @foreach($dados['Servicos'] as $key)
            <div class="modal fade" id="mod-del-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                    <form  method="POST" action="{{ url('/eliminarServico') }}">
                        {{csrf_field() }}
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apagar Tipo de Servico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                Tem certeza que pretende eliminar o Servico {{$key->descricao}}?
                            </div>
                            <div style="display: none;">
                                <input name="servicos_id" value="{{$key->id}}">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Sim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

    </div>


@endsection
