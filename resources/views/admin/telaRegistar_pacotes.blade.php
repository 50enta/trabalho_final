@extends('home')
@section('base')


    <!-- Start XP Row -->
    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title  text-black">Pacotes de Eventos</h5>
                    <div class="form-group text-right col-md-10">

                        <label  for="preco"> Preco Total </label>

                    </div>
                </div>



                <div class=" card-body">
                    <form class="row" method="POST" action="{{ url('/registarPacotes') }}">
                        {{csrf_field() }}

                        <div class="col-md-8">

                            <div class="form-group col-md-8">
                                <label for="descricao"> Descricao</label>
                                <input type="text" name="descricao" id="descricao" rows="3" placeholder=" "></input>
                            </div>
                            <br>
                            <div class="form-group col-md-8 ">
                                <label>Dia de Semana</label>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dia_semana[]" id="dia1"
                                           value=" Sextas">
                                    <label class="form-check-label" for="dia1">
                                        Sextas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dia_semana[]" id="dia2"
                                           value="Sabados">
                                    <label class="form-check-label" for="dia2">
                                        Sabados
                                    </label>
                                </div>

                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" name="dia_semana[]" id="dia3"
                                           value="Domingos" >
                                    <label class="form-check-label" for="dia3">
                                        Domingos
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-8">

                            <label > Quantidade de Pessoas</label><br>
                            <div class="form-group row">

                                <div  class="col-4" >
                                    <input class="form-control"  name="inter_inferior" placeholder="de"  >
                                </div>


                                <div  class="col-4  " >
                                    <input class="form-control"  name="inter_superior" placeholder="ate" >
                                </div>

                            </div>
                            </div>
                            <br>

                            <div class="form-group col-md-8">
                                <label for="preco"> Preco do Pacote</label>
                                <input type="text"  name="preco">
                            </div>
                            <br>


                        </div>
                        <div class=" border col-md-4">
                           <h4>Incluir Servicos</h4>
                                @foreach($dados['Servicos'] as $item)


                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" value="{{$item->id}}" name="descricao[]" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{$item->descricao}}
                                        </label>
                                    </div>


                                    <br>
                                    <br>

                                @endforeach

                        </div>


                        <div class="form-group offset-9 ">
                            <button type="button" class="btn btn-secondary" >Cancelar</button>
                            <button type="submit" class="btn btn-primary">adicionar</button>
                        </div>
                    </form>



                </div>

            </div>

        </div>
    </div>
    <div class=" row">
        <div class="col-lg-12">
        <div class="table-responsive">
            <table  id="datatable-1" class=" table table-datatable table-bordered" >

            <thead>
                <tr>
                    <th>No</th>
                    <th>Descricao</th>
                    <th>No de Convidados</th>
                    <th>preco(Un)</th>
                    <th>Dias de semana</th>

                    <th class="">Operacoes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dados['pacotes'] as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>de {{$item->inter_inferior}} ate {{$item->inter_superior}}</td>
                        <td>{{$item->preco}}
                        <td>{{$item->dia_semana}}</td>


                        <td class="text-right">
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





@endSection

