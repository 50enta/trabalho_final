@extends('home')
@section('base')


    <!-- Start XP Row -->
    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Registar Colaboradores </h5>

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
                                    <th>Nome </th>
                                    <th>Contacto </th>
                                    <th>Funcao</th>

                                    <th class="">Operacoes</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dados['Colaboradores'] as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->nome}}</td>
                                        <td>{{$item->contacto}}</td>
                                        <td>{{$item->funcao}}</td>
                                        <td class="text-right">
                                            <a class="btn btn-primary detbnt center " data-toggle="modal" data-target="#mod-{{$item->id}}" >
                                                <i class="batch-icon batch-icon-eye" ></i>
                                            </a>
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
    </div>



    {{--    START MODAL ADICIONAR--}}
    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Tipos de evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <form  method="POST" action="{{ url('/adicionarColaborador') }}">
                    {{csrf_field() }}

                    <div class="form-group col-md-8">
                        <label for="nome"> Nome</label>
                        <input type= "text" class="form-control" name="nome" id="nome"  placeholder=" ">

                    </div>

                    <div class="form-group col-md-8">
                        <label for="contacto"> Telefone</label>
                        <input type="text" class="form-control" name="contacto" id="contacto" placeholder=" ">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="funcao"> Funcao</label>
                        <input type="text" class="form-control" name="funcao" id="funcao" placeholder="  ">
                    </div>
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

@foreach($dados['Colaboradores'] as $key)
    <div id="mod-{{$key->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p>Nome: {{$key->nome}}</p>
                    <p>Contacto: {{$key->contacto}}</p>
                    <p>Funcao: {{$key->funcao}}</p>
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
{{--        end show modal --}}

    {{--     start edit modal --}}
    @foreach($dados['Colaboradores'] as $key)

    <div class="modal fade" id="mod-edit-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form  method="POST" action="{{ url('/editarColaborador') }}">
                {{csrf_field() }}

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">edit Tipo de evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input class="form-control" name="nome"  value="{{$key->nome}}"></input>
                                </div>
                                <div class="form-group">
                                    <label for="telefone"> Telefone</label>
                                    <input  class="form-control" name="contacto"  value="{{$key->contacto}}"></input>
                                </div>
                                <div class="form-group">
                                    <label for="funcao"> Funcao</label>
                                    <input class="form-control" name="funcao" value="{{$key->funcao}}"></input>
                                </div>
                                <br>
                            <div style="display: none">
                                <input name="colaborador_id"  value="{{$key->id}}"></input>
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
{{--        end edit modal--}}


{{--     start modal delete--}}
    @foreach($dados['Colaboradores'] as $key)
    <div class="modal fade" id="mod-del-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form  method="POST" action="{{ url('/eliminarColaborador') }}">
                {{csrf_field() }}

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apagar colaborador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        Tem certeza que pretende eliminar o colaborador {{$key->nome}}?
                    </div>
                    <div style="display: none;">
                        <input name="colaborador_id" value="{{$key->id}}">
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
    {{--    end delete modal--}}


@endSection


