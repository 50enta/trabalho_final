@extends('event.Inicio-2')
@section('teste')

    <style>
        h3,h4,p{
            padding-left: 5px;
        }
        #editbnt{
            margin-left: 250px;
        }
    </style>



    <div class="row">
        <div>
            <br>
        </div>
        {{--            @foreach($dados['user'] as $item)--}}
        <form  method="POST" action="{{ url('/editarPerfil') }}">
            {{csrf_field() }}
            <div class="">
                <div class="col-sm-12 col-md-4 col-xl-3 mb-4  ">
                    <div class="card ">
                        <div class="card card-md bg-primary bg-gradient text-center">
                            <div class="card-body">
                                <div class="profile-picture profile-picture-lg bg-gradient bg-primary mt-5">
                                    <img src="{{asset('event/img/profile-pic.jpg')}}" width="" height="">
                                </div>
                                <p class="mt-5 mb-4">{{auth()->guard('web')->user()->name}}</p>
                                <div class="col-md-4">
                                    <input type="text" id="name" name="name" class="form-control" value="{{auth()->guard('web')->user()->name}}" >

                                </div>
                                {{--                                <input name="name" id="name" value="{{auth()->guard('web')->user()->name}}"  style="color: #0a151f" >--}}



                            </div>


                        </div>
                        <h4>Informacoes Basicas</h4> <a class="btn btn-primary " onclick="editar()" id="editbnt">Editar perfil</a><br>
                        <input name="name"  id="email" value="{{auth()->guard('web')->user()->email}} " disabled>

                    </div>

                </div>

            </div>
        </form>
        {{--                    @endforeach--}}
        <div class="col-md-8" >
            <div class="panel panel-default card "  >
                <div class="panel-heading " style="background-color: #dd0a37; ">Meu Evento</div>

                <div class="panel-body ">


                </div>
            </div>
        </div>
        <script type="text/javascript">
            function editar(){
                document.getElementById('name').disabled= false;
                document.getElementById('email').disabled= false;
            }
        </script>

    </div>

@endsection
