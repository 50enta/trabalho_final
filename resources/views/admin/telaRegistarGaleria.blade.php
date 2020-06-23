@extends('home')
@section('base')

    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Registo de Galeria de fotos </h5>

                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addmodal">adicionar
                                </button>

                            </div>
                        </div>


                    </div>

                </div>

                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-md-11">




                        <div class="table-datatable">

                                <table  id="datatable-1" class=" table table-datatable table-bordered"  style="margin-left: 40px; margin-right: 40px;" >

                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Imagem</th>
                                    <th>Categoria</th>


                                    <th class="">Operacoes</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($galeria_imagems as $item)


                                    <tr>
                                        <td>{{$item->id}}</td>

                                        <td><img src="{{ asset('images/'.$item->image)}}" style="width: 200px; height: 150px"></td>

                                        <td > {{$item->descricao}}</td>


                                        <td class="text-right">

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
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Fotos a galeria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <form  method="POST" action="{{ url('/adicionarFotos') }}" enctype="multipart/form-data">
                    {{csrf_field() }}

                    <div class="form-group col-md-10">
                        <label for=""> Adicionar imagem</label>
                        <input required="" type="file" name="image" class="form-control">
                    </div>

<br>
                    <div class="form-group col-md-8">
                        <label for="funcao"> Categoria da Imagem</label>
                        <select type="text" class="form-control" name="categoriaImagem" placeholder="  ">
                        <option>Seleccione</option>
                            @foreach($dados['categoria'] as $item)
                                <option value="{{$item->id}}"->{{$item->descricao}}</option>
                            @endforeach
                        </select>
                    </div>
<br>
<br>                <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Sim</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{--    END MODAL ADICIONAR--}}



    {{-- start edit modal --}}
    @foreach($dados['imagem'] as $key)
        <div class="modal fade" id="mod-edit-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form  method="POST" action="{{ url('/editarImagem') }}" enctype="multipart/form-data">
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

                                    <div class="form-group col-md-10">
                                        <label for=""> Adicionar imagem</label>
                                        <input required=""  type="file" name="image"  >
                                    </div>

                                    <br>
                                    <div class="form-group col-md-10">
                                        <label for="funcao"> Categoria da Imagem</label>
                                        <select type="text" class="form-control" name="categoriaImagem" placeholder="  ">
                                            <option value="{{$item->id}}">{{$item->descricao}}</option>
                                            @foreach($dados['categoria'] as $item)
                                                <option value="{{$item->id}}"->{{$item->descricao}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <br>


                                    <div style="display: none">
                                        <input name="imagem_id"  value="{{$key->id}}">
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
    @foreach($dados['imagem'] as $key)
        <div class="modal fade" id="mod-del-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form  method="POST" action="{{ url('/eliminarImagem') }}">
                    {{csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apagar imagem</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            Tem certeza que pretende eliminar a imagem {{$key->image}}?
                        </div>
                        <div style="display: none;">
                            <input name="imagem_id" value="{{$key->id}}">
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
@endsection
