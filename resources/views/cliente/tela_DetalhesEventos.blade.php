@extends('event.Inicio-1')

@section('teste')


<style>

</style>
    <div id="detalhes" class="section">
          <div class="row">

                    <di class="col-md-12">

                        <div class="col-md-3" style="padding: 0px" >
                            <img  src="{{ asset('images/'.$dados['tipo_eventos']->image)}}" class="zoomInUp"  style="width: 350px;height: 250px" alt="">
                        </div>
                        <div class="col-md-8" style="padding: 0px">
                            <div class=" card box bg-success mb-3 text-center">
                                <div class="card-body">
                                    <blockquote class="blockquote">
                                        <p>  {{$dados['tipo_eventos']->comentario}}</p>
                                        <footer>SHigom <cite title="Source Title">Recanto Familiar</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                   </di>


          </div>
    </div>


    </div>





@endsection

{{--                        <div class="col-md-3"  style="padding: 0px">--}}
{{--                            <img  src="{{ asset('images/'.$dados['tipo_eventos']->image)}}" class="zoom img-fluid " style="width: 350px;height: 250px" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-9 bg-success coment"  style="padding: 0px;margin:0px" >--}}
{{--                            <div class="box card-md-12"> </div>--}}
{{--                            <div class="box card-md-8">--}}
{{--                                <div>--}}
{{--                                    <p>  {{$dados['tipo_eventos']->comentario}}</p>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
