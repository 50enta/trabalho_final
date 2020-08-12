@extends('home')
@section('base')

    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Registo de Materias </h5>
                    <h6 class="card-subtitle">registe todos <code
                            class="highlighter-rouge">Materias</code></h6>
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

                <div class="row ">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <input class="form-control" id="myInput" type="text" placeholder="Procurar..">
                        <br>

                        <div class=" table-datatable" style="margin-right: 5px; margin-left: 5px" >
                            <table  id="datatable-1" class=" table table-datatable table-bordered" >

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>tipo</th>
                                    <th>quantidade</th>
                                    <th>capacidade</th>
                                    <th>formato</th>
                                    <th>preco(Un)</th>

                                    <th class="">Operacoes</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dados['materias'] as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->tipo_material_id}}</td>
                                        <td>{{$item->quantidade}}</td>
                                        <td>{{$item->capacidade}}</td>
                                        <td>{{$item->formato}}</td>
                                        <td>{{$item->preco}}

                                        <td class="text-left">
                                            <a class="btn btn-primary detbnt center " data-toggle="modal"
                                               data-target="#mod-{{$item->id}}">
                                                <i class="batch-icon batch-icon-eye"></i>
                                            </a>
                                            <a class="btn btn-success editbnt center  " data-toggle="modal"
                                               data-target="#mod-edit-{{$item->id}}">
                                                <i class="batch-icon batch-icon-pen"></i>
                                            </a>
                                            <a class="btn btn-danger deletebnt center " data-toggle="modal"
                                               data-target="#mod-del-{{$item->id}}">
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
    <div class="modal fade bd-example-modal-sizes" id="addmodal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar materias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ url('/adicionarMaterias') }}">
                    {{csrf_field() }}
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group col-md-8 offset-2">
                                <label for="tipo"> Tipo de Material</label>
                                <select name="tipo" type="text" class="form-control" id="tipo" onchange="enable()">
                                    <option>Seleccione</option>
                                    @foreach($dados['tipos_material'] as $item)
                                        <option value="{{$item->tipo}}"->{{$item->tipo}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <br>
                            <div class="form-group col-md-8 offset-2 ">
                                <label>Material de fabrico</label>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="material_fabrico" id="fabrico1"
                                           value=" metal" disabled>
                                    <label class="form-check-label" for="fabrico1">
                                        Metal
                                    </label>
                                </div>

                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="material_fabrico" id="fabrico2"
                                           value="plastico" disabled>
                                    <label class="form-check-label" for="fabrico2">
                                        Plastico
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-8 offset-2">
                                <label for="quantidade"> Quantidade</label>
                                <input type="text" class="form-control" name="quantidade" id="quantidade"
                                       placeholder="  ">
                            </div>
                            <br>
                            <div class="form-group col-md-8 offset-2 disabled">
                                <label for="preco"> Preco(UN)</label>
                                <input type="text" class="form-control" name="preco" id="preco" placeholder="  ">
                            </div>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-8 offset-2 ">
                                <label>Formato</label>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formato" id="formato1"
                                           value=" redondo"  readonly>
                                    <label class="form-check-label" for="formato1">
                                        Redondo
                                    </label>
                                </div>

                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="formato" id="formato2"
                                           value="rectangular" readonly>
                                    <label class="form-check-label" for="formato2">
                                        Rectangular
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class=" form-group col-md-8 offset-2 ">
                                <label for="capacidade"> Capacidade</label>
                                <input type="text" class="form-control " name="capacidade" id="capacidade"
                                       placeholder="  " readonly>
                            </div>
                            <div class="form-group col-md-8 offset-2 ">
                                <label for="cor"> Cor</label>
                                <input type="color" class="form-control disabled" name="cor" id="cor"
                                       placeholder="  " readonly>
                            </div>
                        </div>
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
        @foreach($dados['materias'] as $key)
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
                            <p>tipo: {{$key->tipo}}</p>
                            <p>quantidade: {{$key->quantidade}}</p>
                            <p>preco: {{$key->preco}}</p>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header card-header-divider">Fotografias do material<span
                                            class="card-subtitle"></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="gallery-container">
                                            @foreach($key->fotomateriais()->get() as $item)
                                                <div class="item">
                                                    <div class="photo">
                                                        <div class="img">
                                                            <img src="{{asset('images/'.$item->caminho)}}"
                                                                width="150px"; height="70px" alt="fotografia">
                                                            <div class="over">
                                                                <div class="info-wrapper">
                                                                    <div class="info">
                                                                        <!-- <div class="title">Título</div> -->
                                                                        <div class="date">{{ $item->created_at }}</div>
                                                                        <div
                                                                            class="description">{{ $item->legenda }}</div>
                                                                        <div class="func">
                                                                            <!-- <a href="#">
                                                                              <i class="icon mdi mdi-link"></i>
                                                                            </a> -->
                                                                            <a class="image-zoom"
                                                                               href="{{asset('images/'.$item->caminho)}}">
                                                                                <i class="icon mdi mdi-search"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach

                                        <!-- A parte do upload -->
                                            <div class="item">
                                                <div class="photo">
                                                    <div class="img">
                                                        <form action="{{ url('/uploadfoto') }}" method="POST"
                                                              enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input required="" type="file" name="image"
                                                                           class="form-control">
                                                                </div>
                                                                <br>
                                                                <div style="border-top: 10px; bordr-bottom: 15px;"
                                                                     class="col-md-12">
                                                                    <!-- <input type="text" name="legenda" placeholder="lengenda..."> -->
                                                                    <textarea name="legenda" class="form-control"
                                                                              required="" id="detalhes1"
                                                                              placeholder="Legenda para a foto..."></textarea>
                                                                </div>
                                                                <br>
                                                                <!-- Inputs flags -->
                                                                <div style="display: none">
                                                                    <input type="text" name="material_id"
                                                                           value="{{$key->id}}">
                                                                    <input type="text" name="antes" value="1">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button type="submit"
                                                                            class="btn btn-primary col-md-12">Upload
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
        @foreach($dados['materias'] as $key)
            <div class="modal fade" id="mod-edit-{{$key->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                    <form method="POST" action="{{ url('/editarMaterial') }}">
                        {{csrf_field() }}

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">editar Materias</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-lg-6">


                                        <div class="form-group">
                                            <label for="descricao"> Descricao</label>
                                            <input class="form-control" name="descricao" type="textarea" size="87"
                                                   maxlength="100" value="{{$key->descricao}}"></input>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="tipo"> Tipo</label>
                                            <select class="form-control" name="tipo" value="{{$key->tipo}}">
                                                @foreach($dados['tipos_material'] as $item)
                                                    <option value="{{$item->descricao}}">{{$item->descricao}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="descricao"> quantidade</label>
                                            <input class="form-control" name="quantidade"
                                                   value="{{$key->quantidade}}"></input>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="descricao"> Preco</label>
                                            <input class="form-control" name="preco" value="{{$key->preco}}"></input>
                                        </div>
                                        <br>


                                        <div style="display: none">
                                            <input name="tipo_material_id" value="{{$key->id}}">
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
        @foreach($dados['materias'] as $key)
            <div class="modal fade" id="mod-del-{{$key->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                    <form method="POST" action="{{ url('/eliminarMaterial') }}">
                        {{csrf_field() }}

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Material</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem certeza que pretende eliminar o material {{$key->descricao}}?
                            </div>
                            <div style="display: none;">
                                <input name="material_id" value="{{$key->id}}">
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

    </div>


    <script>


         function enable() {
             $tipo = tipo_material::find($id);

             let tipo = $('select[name=tipo]').val();
             if(tipo === 'mesa' ){
                 document.getElementById('formato1').disabled= false;
                 document.getElementById('formato2').disabled= false;
                 document.getElementById('capacidade').disabled= false;
             }

             else{

                 document.getElementById('formato1').disabled= true;
                 document.getElementById('formato2').disabled= true;
                 document.getElementById('capacidade').disabled= true;

             }
             if(tipo === 'pano'){
                 document.getElementById('cor').disabled= false;
             }
             else{
                 document.getElementById('cor').disabled= true;
             }

            if(tipo === 'mesa' || tipo === 'cadeira'){
                document.getElementById('fabrico1').disabled= false;
                document.getElementById('fabrico2').disabled= false;

            }else{
                document.getElementById('fabrico1').disabled= true;
                document.getElementById('fabrico2').disabled= true;
            }


         }



    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <script>
        window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')
    </script>
@endsection

