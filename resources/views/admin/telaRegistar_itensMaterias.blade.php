@extends('home')
@section('base')


    <!-- Start XP Row -->
    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Registar itens </h5>
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




                        <div class="table-datatable">
                            <table class="table table-bordered" id="editTable" >
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Categoria do item </th>
                                    <th>Descricao </th>
                                    <th>Quantidade </th>

                                    <th class="">Operacoes</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($itens_materials as $item)

                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td value="">{{$item->descricao}}</td>
                                        <td>{{$item->descricao}}</td>
                                        <td>{{$item->quantidade}}</td>

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
                                    {{--                        @endforeach--}}
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar itens </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <form  method="POST" action="{{ url('/adicionarItensMateriais') }}">
                    {{csrf_field() }}
                   <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group col-md-10 ">
                                <label for="categ"> Categoria dos itens</label>
                                <select  type="text" class="form-control" id="categoria" name="categoria" onchange="enable()">
                                    <option>Seleccione a categoria do item</option>
                                    @foreach($dados['categoria_itens'] as $item)
                                        <option value="{{$item->id}}"->{{$item->descricao}}</option>
                                    @endforeach

                                </select>
                            </div>
                             <br>
                             <div class="form-group col-md-10">
                                <label for="descicao"> Descricao do item</label>
                                <input type= "text" class="form-control" name="descricao" id="descricao"  placeholder=" ">

                             </div>
                             <br>
                            <div class="form-group col-md-10">
                                <label for="quantidade"> Quantidade</label>
                                <input type= "text" class="form-control" name="quantidade" id="quantidade"  placeholder=" ">

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
                            <div class=" form-group col-md-10 offset-2 ">
                                <label for="capacidade"> Capacidade</label>
                                <input type="text" class="form-control " name="capacidade" id="capacidade"
                                       placeholder="" readonly>
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

    @foreach($dados['itens'] as $key)
        <div id="mod-{{$key->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <p>categoria do item: {{$key->descricao}}</p>
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
    {{--    end show modal --}}

    @foreach($dados['itens'] as $key)
        {{-- start edit modal --}}
        <div class="modal fade" id="mod-edit-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <form  method="POST" action="{{ url('/editarItensMaterial') }}">
                    {{csrf_field() }}

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">editar itens do Servico</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">

                                    <div class="form-group col-md-10 ">
                                        <label for="categ"> Categoria dos itens</label>
                                        <select  type="text" class="form-control" id="categoria" name="categoria" onchange="enable()">
                                            <option value="{{$key->id}}"->{{$key->descricao}}</option>
                                            @foreach($dados['categoria_itens'] as $item)
                                                <option value="{{$item->id}}"->{{$item->descricao}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="nome">Descricao</label>
                                        <input class="form-control" name="nome"  value="{{$key->descricao}}"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone"> Quantidade</label>
                                        <input  class="form-control" name="contacto"  value="{{$key->contacto}}"></input>
                                    </div>

                                    <br>
                                    <div style="display: none">
                                        <input name="itens_material_id"  value="{{$key->id}}"></input>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                </form>
            </div>
        </div>

    @endforeach
    {{--    end edit modal--}}


    {{-- start modal delete--}}
    @foreach($dados['itens'] as $key)
        <div class="modal fade" id="mod-del-{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form  method="POST" action="{{ url('/eliminarItensMaterial') }}">
                    {{csrf_field() }}

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apagar itens</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que pretende eliminar o item {{$key->nome}}?
                        </div>
                        <div style="display: none;">
                            <input name="itens_material_id" value="{{$key->id}}">
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



    <script>


        function enable() {


            let categoria = $('select[name = categoria]').val();
            if(categoria == 1){
                document.getElementById('formato1').readOnly= false;
                document.getElementById('formato2').readOnly= false;
                document.getElementById('capacidade').readOnly= false;
            }

            else{

                document.getElementById('formato1').readOnly= true;
                document.getElementById('formato2').readOnly= true;
                document.getElementById('capacidade').readOnly= true;

            }
            if(categoria == 3){
                document.getElementById('cor').readOnly= false;
            }
            else{
                document.getElementById('cor').readOnly=true ;
            }

            // if(categoria === 'mesa' || categoria === 'cadeira'){
            //     document.getElementById('fabrico1').disabled= false;
            //     document.getElementById('fabrico2').disabled= false;
            //
            // }else{
            //     document.getElementById('fabrico1').disabled= true;
            //     document.getElementById('fabrico2').disabled= true;
            // }


        }



    </script>
@endSection


