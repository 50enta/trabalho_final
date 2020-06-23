@extends('home')
@section('base')

    <!-- Start XP Row -->
    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Registar tipos de Eventos </h5>
                    <h6 class="card-subtitle">registe todos <code
                            class="highlighter-rouge">tipos de eventos</code> que o espaco realiza .</h6>
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


                            <table  id="datatable-1" class=" table table-datatable table-bordered" >

                            <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>descricao</th>
                                <th>Comentario</th>
                                <th>Imagem</th>
                                <th class="">Operacoes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dados['tipo_eventos'] as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->descricao}}</td>
                                    <td>{{$item->comentario}}</td>
                                    <td><img src="{{ asset('images/'.$item->image)}}" style="width: 120px; height: 80px"></td>
                                    <td class="text-right">
                                        {{--                                    <a class="btn btn-primary detbnt center " data-toggle="modal" data-target="#mod-{{$item->id}}" >--}}
                                        {{--                                        <i class="batch-icon batch-icon-eye" ></i>--}}
                                        {{--                                    </a>--}}
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
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Tipos de evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form  method="POST" action="{{ url('/adicionarTipoEvento') }}"enctype="multipart/form-data">

                    {{csrf_field() }}
                    <div class="form-group col-10">
                        <label for="descricao"> Descricao</label>
                        <input class="form-control" name="descricao" id="descricao"  placeholder=" "></input>

                    </div>


                    <br>
                    <div class="form-group col-10">
                        <label for="comentario"> Adiciona um Comentario</label>
                        <textarea class="form-control" name="comentario" id="comentario" rows="3"  placeholder=" "></textarea>

                    </div>
                    <br>
                    <div class="form-group col-md-10">
                        <label for=""> Adicionar uma imagem</label>
                        <input required="" type="file" name="image" class="form-control">
                    </div>
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






    {{-- start edit modal --}}
    @foreach($dados['tipo_eventos'] as $key)
    <div class="modal fade" id="mod-edit-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form  method="POST" action="{{ url('/editarTipoEvento') }}" enctype="multipart/form-data">
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
                        <div class="col-lg-8">


                                <div class="form-group">
                                    <label for="descricao"> Descricao</label>
                                    <input class="form-control"  name="descricao"  value="{{$key->descricao}}">
                                </div>
                                <br>
                            <div class="form-group">
                                <label for="descricao"> Comentario</label>
                                <textarea class="form-control"  name="comentario"  >{{$key->comentario}}</textarea>
                            </div>
                            <br>

                                <div class="form-group">
                                    <label for="image">Adicionar Imagem</label>
                                    <input class="form-control"  type="file" name="image"  value="{{$key->image}}">
                                </div>
                                <br>


                            <div style="display: none">
                                <input name="tipo_evento_id"  value="{{$key->id}}">
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
    @foreach($dados['tipo_eventos'] as $key)
    <div class="modal fade" id="mod-del-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form  method="POST" action="{{ url('/eliminarTipoEvento') }}">
                {{csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apagar Tipo de evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                    <div class="modal-body">
                        Tem certeza que pretende eliminar o tipo de evento {{$key->titulo}}?
                    </div>
                    <div style="display: none;">
                        <input name="tipo_evento_id" value="{{$key->id}}">
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


{{--    end delete modal--}}





@endSection

