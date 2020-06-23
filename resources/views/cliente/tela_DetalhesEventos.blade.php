@extends('event.Inicio-1')

@section('teste')


<style>
    .bg-signin2{
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.43), rgba(0, 0, 0, 0.48));
        height: 100%;
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
    }

</style>
    <div id="detalhes" class="section">

        <h3 class="title"><span></span> <span style=" color: #dd0a37;"> {{$dados['tipo_eventos']->descricao}}</span></h3>
          <div class="row">
              {{--                        <img  class="bg-signin2" src="{{asset('quilPro/img/space/1.jpg')}}">--}}
                    <di class="col-md-12">

                        <div class="col-md-3" style="padding: 0px">
                            <img  src="{{ asset('images/'.$dados['tipo_eventos']->image)}}" class="zoom img-fluid bg-signin2" style="width: 350px;height: 250px" alt="">
                        </div>
                        <div class="col-md-9" style="padding: 0px">
                            <div class=" card box bg-success mb-3 text-center">
                                <div class="card-body card-img-overlay">
                                    <blockquote class="blockquote">
                                        <p>  {{$dados['tipo_eventos']->comentario}}</p>
                                        <footer>SHIGOM <cite title="Source Title">Recanto Familiar</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

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
                    </di>







          </div>
    </div>


    </div>





@endsection
