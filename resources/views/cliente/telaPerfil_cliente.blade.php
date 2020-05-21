@extends('event.Inicio-2')
@section('teste')

    <style>
        .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
        }
        .kv-avatar {
            display: inline-block;
        }
        .kv-avatar .file-input {
            display: table-cell;
            width: 213px;
        }
        .kv-reqd {
            color: red;
            font-family: monospace;
            font-weight: normal;
        }
    </style>
@if(count($errors)>0)

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>



@endif
@if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
@endif

        <div id="" class=" row section">
            <div class="card-body">
                <form  method="POST" action="{{ url('/updatePerfil') }}" enctype="multipart/form-data">
                    {{csrf_field() }}
                <div class="col-md-4">

                        <div class="card ">
                            <div class="card card-md bg-secondary bg-gradient text-center">
                                <div class="card-body">
                                    <br>
                                    <div class="profile-picture profile-picture-lg bg-gradient bg-primary mt-5">
                                        <img src="{{asset('event/img/profile-pic.jpg')}}" width="" height="">
                                    </div>
                                    <br>
                                    <a class="btn btn-primary " onclick="editar()" id="editbnt" style="margin-bottom: 10px">Alterar Foto </a>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-4 text-center">
                        <div class="kv-avatar">
                            <div class="file-loading">
                                <input id="avatar-2" name="avatar-2" type="file" required>
                            </div>
                        </div>
                        <div class="kv-avatar-hint">
                            <small>Select file < 1500 KB</small>
                        </div>


                    </div>

                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6">





                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Nome</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" value="{{auth()->guard('web')->user()->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Apelido</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="apelido" id="apelido" value="{{auth()->guard('web')->user()->apelido}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email"  id="email" value="{{auth()->guard('web')->user()->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefone" class="col-sm-3 col-form-label">Telefone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{auth()->guard('web')->user()->telefone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" id="password" value="{{auth()->guard('web')->user()->password}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Confirmacao</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                        </div>
                    </div>



                    <br>
                    <div class="form-group row ">
                        <div class="col-sm-10"></div>
                        <button type="submit" class="btn btn-primary">Editar perfil</button>

                    </div>



            </div>
                </form>

        </div>

            </div>

        </div>
    <!-- the fileinput plugin initialization -->
    <script>
        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';
        $("#avatar-2").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="/samples/default-avatar-male.png" alt="Your Avatar"><h6 class="text-muted">Click to select</h6>',
            layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    </script>

@endsection
