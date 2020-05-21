<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>SHigom</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->

    <link type="text/css" rel="stylesheet" href="{{asset('event/css/bootstrap.min.css')}}" />



	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('event/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('event/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('event/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('event/css/style.css')}}" />


<style>
    .main-nav li.active a:after {
        content: "";
        height: 3px;
        position: absolute;
        bottom: -3px;
        width: 100%;
        left: 0;
        background: #dd0a37;
    }

</style>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>
<body style="background-color: #f8f7ff">

	<!-- Header -->
	<header id="header" class="">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
                    <a class="navbar-brand" href="{{ url('/') }}"> SHIGOM | RECANTO FAMILIAR  </a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">


				<ul class="main-nav nav navbar-nav navbar-right">
					<li ><a href="{{url('/')}}">Inicio</a></li>
					<li  ><a href="{{url('/efectuarReserva')}}">Agendar evento</a></li>
					<li><a href="{{url('/perfil/'.auth()->guard('web')->user()->id)}}">Meu perfil</a></li>
                    <li><a href="{{url('/#galeria')}}">Galeria</a></li>
                    <li><a href="#sponsors">Nossos Servicos</a></li>
					<li ><a href="{{url('/#contact')}}">Contacto</a></li>

                    <li class="nav-item dropdown"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle perfil" src="{{asset('event/img/avatar.png')}}" alt="" />
                            </div>
                        </a>


                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                        </li>
                        @if (Route::has('register'))
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--                            </li>--}}
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/perfil/'.auth()->guard('web')->user()->id)}}">   {{ __('Perfil') }}</a><br><br>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        </li>
                </ul>




            </nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Home -->
{{--	<div id="home">--}}
{{--		--}}
{{--	</div>--}}
	<!-- /Home -->

	<!-- About -->
	<div class="card" id="card-body">
		<!-- container -->
		<div class="container" >
			<!-- row -->
{{--			<div class="row">--}}
                @yield('teste')
{{--			</div>--}}
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /About -->




	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container ">
			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
{{--						<a class="logo" href="Inicio.blade.php">--}}
{{--							<img class="logo-img" src="./img/logo.png" alt="logo">--}}
{{--						</a>--}}
					</div>
				</div>

				<!-- copyright -->
				<div class="col-md-12 ">
					<span class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos direitos Reservados | Shigom  <i class="fa fa-heart-o" aria-hidden="true"></i> Recanto  <a href="" target="_blank">familiar</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<!-- /copyright -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->

{{--	<script src="{{asset('event/js/jquery.min.js')}}"></script>--}}
	<script src="{{asset('event/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('event/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('event/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('event/js/jquery.stellar.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="{{asset('event/js/google-map.js')}}"></script>
	<script src="{{asset('event/js/jquery.countTo.js')}}"></script>
	<script src="{{asset('event/js/main.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>
