@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-authentication2 mx-auto my-5">
                <div class="card-group">
                    <div class="card mb-0 " >
{{--                        <img  class="bg-signin2" src="{{asset('quilPro/img/space/1.jpg')}}">--}}
                        <div class="bg-signin2"></div>
                        <div class="card-img-overlay rounded-left my-5">
                            <br>
                            <br>
                            <h2 class="text-white">SHIGOM,</h2>
                            <h3 class="text-white">Recanto Familiar</h3>

                            <p class="card-text text-white pt-3"> Organize seu evento Conosco</p>
                        </div>
                    </div>


                    <div class="card mb-0 ">
                        <div class="card-body">
                            <div class="card-content p-3">
                            <!-- <div class="text-center">
                        <img src="{{asset('bulona/images/logo-icon.png')}}" alt="logo icon">
                    </div> -->
                                <div class="card-title text-uppercase text-center py-3">Iniciar Seccao cliente</div>
                                <br>
                                <br>

                                <form method="POST" action="{{ route('login') }}">
                                    {{csrf_field() }}
                                    <div class="form-group">
                                        <div class="position-relative ">
                                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="exampleInputPassword" class="sr-only">Senha</label>
                                            <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mr-0 ml-0">
                                        <div class="form-group col-6">
                                            <div class="icheck-material-primary">
                                                <input type="checkbox" id="user-checkbox" checked="" />
                                                <label for="user-checkbox">Lembrar me</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-6 text-right">

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu a Senha??') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block"> {{ __('Iniciar') }}</button>

                                    <div class="text-center pt-3">


                                        <hr>
                                        <p class="text-dark">Nao tem Conta? <a href="{{ route('register') }}"> Criar Conta</a></p>
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

<link rel="stylesheet" href="{{asset('bulona/css/app-style.css')}}">
@endsection
