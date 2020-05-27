
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from base5builder.com/livedemo/quillpro/v2.0/html/principal.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 10:15:06 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41035904-17"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-41035904-17');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHIGOM - admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS - REQUIRED - START -->
    <!-- Batch Icons -->
    <link rel="stylesheet" href="{{asset('quilPro/fonts/batch-icons/css/batch-icons.css')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('quilPro/css/bootstrap/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{asset('quilPro/plugins/fullcalendar/fullcalendar.min.css')}}">

    <link rel="stylesheet" href="{{asset('quilPro/js/jquery/jquery-ui-1.11.0.custom/jquery-ui.min.css')}}">
    <link  rel="stylesheet" href="{{asset('quilPro/js/jquery/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css')}}">
    <link  rel="stylesheet" href="{{asset('quilPro/js/jquery/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css')}}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" href="{{asset('quilPro/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="{{asset('quilPro/css/hamburgers/hamburgers.css')}}">

    <!-- CSS - toggle bootstrap-  -->
{{--    <link  rel="stylesheet" href="{{asset('quilPro/bootstrap-toggle-master/css/bootstrap-toggle.min.css')}}">--}}
{{--    <link  rel="stylesheet" href="{{asset('quilPro/bootstrap-toggle-master/css/bootstrap2-toggle.min.css')}}">--}}

<!-- CSS - OPTIONAL - START -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('quilPro/fonts/font-awesome/css/font-awesome.min.css')}}">
    <!-- JVMaps -->
    <link rel="stylesheet" href="{{asset('quilPro/plugins/jvmaps/jqvmap.min.css')}}">
    <!-- CSS - OPTIONAL - END -->
{{--    <link type="" src="{{asset('quilPro/plugins/prettify-bootstrap.min.css')}}"></link>--}}
<!-- QuillPro Styles -->
    <link rel="stylesheet" href="{{asset('quilPro/css/quillpro/quillpro.css')}}">


    <!-- Start of Async Drift Code -->
    <script>
        !function() {
            var t;
            if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
                t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                t.factory = function(e) {
                    return function() {
                        var n;
                        return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
            }), t.load = function(t) {
                var e, n, o, i;
                e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
                    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
            });
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('4n2u4hcda3nb');
    </script>
    <!-- End of Async Drift Code -->

</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="logo-nav-item">
                    <a class="navbar-brand" href="{{ url('/') }}"> SHIGOM | RF</a>

                </li>
                <li>
                    <h6 class="nav-header">Menu Principal</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/admin') }}">
                        <i class=" "></i>
                        Inicio<span class="sr-only">(current)</span>
                    </a>
                </li>

            </ul>

            <ul class="nav nav-pills flex-column">
                <li>
                    <h6 class="nav-header"></h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-parent collapsed" data-toggle="collapse" href="#menu-layout">
                        <i class="batch-icon batch-icon-star"></i>
                        Servicos
                    </a>
                    <ul class="nav nav-pills collapse" id="menu-layout">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registoServico') }}"> Servicos</a>
                            <a class="nav-link" href="{{ url('/registoItens') }}"> itens de Servicos</a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-parent collapsed" data-toggle="collapse" href="#menu-ecommerce">
                        <i class="batch-icon batch-icon-anchor"></i>
                        Materias
                    </a>
                    <ul class="nav nav-pills collapse" id="menu-ecommerce">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registoMaterial') }}"> Registar Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registoCategoriaItens') }}"> Categoria dos itens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/registoItens"> Itens</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-parent collapsed" data-toggle="collapse" href="#menu-search">
                        <i class="batch-icon batch-icon-users"></i>
                        Colaboradores
                    </a>
                    <ul class="nav nav-pills collapse" id="menu-search">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registoColaborador') }}">Todos Colaboradores</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-parent collapsed" data-toggle="collapse" href="#menu-mail">
                        <i class="batch-icon batch-icon-folder-alt"></i>
                        Pacotes
                    </a>
                    <ul class="nav nav-pills collapse" id="menu-mail">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pacotes') }}">Pacotes de eventos</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendar.html">
                        <a class="nav-link nav-parent collapsed" data-toggle="collapse" href="#menu-ecommerce">
                            <i class="batch-icon batch-icon-calendar"></i>
                            Eventos
                        </a>

                        <ul class="nav nav-pills collapse" id="menu-ecommerce">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/verReservas') }}"> Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/registoTipoEvento') }}">Tipos de Eventos</a>
                            </li>

                        </ul>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="calendar.html">
                        <a class="nav-link nav-parent collapsed" data-toggle="collapse" href="#menu-ecommerce">
                            <i class="batch-icon batch-icon-settings"></i>
                            Configuracoes
                        </a>

                        <ul class="nav nav-pills collapse" id="menu-ecommerce">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/galeria') }}">Criar Galeria </a>
                            </li>


                        </ul>
                    </a>
                </li>

            </ul>

        </nav>
        <div class="right-column">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand d-block d-sm-block d-md-block d-lg-none" href="{{url('/')}}">
                 Shigom RF
                </a>
                <button id="hamburger" class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                </button>
                <!-- Added Mobile-Only Menu -->
                <ul class="navbar-nav ml-auto mobile-only-control d-block d-sm-block d-md-block d-lg-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbar-notification-search-mobile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                            <i class="batch-icon batch-icon-search"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search-mobile">
                            <li>
                                <form class="form-inline my-2 my-lg-0 no-waves-effect">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">
                                                <i class="batch-icon batch-icon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>


                <!-- .collapse added to the element -->
                <div class="collapse navbar-collapse" id="navbar-header-content">
                    <ul class="navbar-nav navbar-language-translation mr-auto">

                    </ul>
                    <ul class="navbar-nav navbar-notifications float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar-notification-search" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-search"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search">
                                <li>
                                    <form class="form-inline my-2 my-lg-0 no-waves-effect">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-5 navbar-profile">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{auth()->guard('admin')->user()->name}} <span class="caret"></span>

                                <div class="profile-picture bg-gradient bg-primary has-message float-right">
                                    <img src="{{asset('quilPro/img/padrao/perfil-padrao1.png')}}" width="44" height="44">
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="main-content p-5" role="main">


                @yield('base')







                <div class="row mb-4">
                    <div class="col-md-12">
                        <footer>
                            Copyright © 2019 SHIGOM, Recanto Familiar
                        </footer>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- SCRIPTS - REQUIRED START -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap core JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('quilPro/js/misc/holder.min.js')}}"></script>
<!-- Moment -->
<script type="text/javascript" src="{{asset('quilPro/js/misc/moment.min.js')}}"></script>

<!-- Jquery UI -->
<script type="text/javascript" src="{{asset('quilPro/js/jquery/jquery-ui-1.11.0.custom/jquery-ui.min.js')}}"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{asset('quilPro/js/jquery/jquery-3.4.1.min.js')}}"></script>
<!-- Popper.js - Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('quilPro/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('quilPro/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Velocity -->
<script type="text/javascript" src="{{asset('quilPro/plugins/velocity/velocity.min.js')}}"></script>
<script type="text/javascript" src="{{asset('quilPro/plugins/velocity/velocity.ui.min.js')}}"></script>

{{--<script type="text/javascript" src="{{asset('quilPro/plugins/prettify.js')}}"></script>--}}
<!-- Custom Scrollbar -->
<script type="text/javascript" src="{{asset('quilPro/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- jQuery Visible -->
<script type="text/javascript" src="{{asset('quilPro/plugins/jquery_visible/jquery.visible.min.js')}}"></script>
<!-- jQuery Visible -->
{{--<script type="text/javascript" src="{{asset('quilPro/plugins/jquery_visible/jquery.visible.ui.min.html')}}"></script>--}}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="{{asset('quilPro/js/misc/ie10-viewport-bug-workaround.js')}}"></script>

<!-- SCRIPTS - toggle bootstrap -->
{{--<script type="text/javascript" src="{{asset('quilPro/bootstrap-toggle-master/js/bootstrap-toggle.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('quilPro/bootstrap-toggle-master/js/bootstrap2-toggle.min.js')}}"></script>--}}

<!-- SCRIPTS - OPTIONAL START -->
<!-- ChartJS -->
<script type="text/javascript" src="{{asset('quilPro/plugins/chartjs/chart.bundle.min.js')}}"></script>
<!-- JVMaps -->
<script type="text/javascript" src="{{asset('quilPro/plugins/jvmaps/jquery.vmap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('quilPro/plugins/jvmaps/maps/jquery.vmap.usa.js')}}"></script>
<!-- Image Placeholder -->
<script type="text/javascript" src="{{asset('quilPro/js/misc/holder.min.js')}}"></script>
<!-- SCRIPTS - OPTIONAL END -->

{{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}


<script>
    // window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')
</script>



<!-- QuillPro Scripts -->
<script type="text/javascript" src="{{asset('quilPro/js/scripts-jquery.js')}}"></script>
<script>
    window['_fs_debug'] = false;
    window['_fs_host'] = 'fullstory.com';
    window['_fs_org'] = '626JC';
    window['_fs_namespace'] = 'FS';
    (function(m,n,e,t,l,o,g,y){
        if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
        g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
        o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
        y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
        g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
        g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
        g.consent=function(a){g("consent",!arguments.length||a)};
        g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
        g.clearUserCookie=function(){};
    })(window,document,window['_fs_namespace'],'script','user');


</script>

</body>

<!-- Mirrored from base5builder.com/livedemo/quillpro/v2.0/html/principal.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 10:18:17 GMT -->
</html>

