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
                            <h3 class="text-white">Recanto familiar</h3>

                            <p class="card-text text-white pt-3"> Organize seu evento Conosco</p>
                        </div>
                    </div>

                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="card-content p-3">
                                <!-- <div class="text-center">
                                    <img src="assets/images/logo-icon.png" alt="logo icon">
                                </div> -->
                                <div class="card-title text-uppercase text-center py-3">Criar Conta</div>
                                <form  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Nome') }}</label>

                                        <div class="col-md-7">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('Email') }}</label>

                                        <div class="col-md-7">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>--}}

{{--                                            @error('telefone')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="form-group row">
                                        <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Senha') }}</label>

                                        <div class="col-md-7">

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirmacao') }}</label>

                                        <div class="col-md-7">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                        <hr>

                                        <p class="text-dark">Ja tem uma conta? <a href="{{ route('login') }}"> Iniciar Seccao</a></p>

                                    </form>
                                 </div>
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
