<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Shigom</title>

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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


			<![endif]-->

    <style>


        #demo {
            height:100%;
            position:relative;
            overflow:hidden;
        }


        .green{
            background-color:#6fb936;
        }
        .thumb{
            margin-bottom: 30px;
        }

        .page-top{
            margin-top:85px;
        }


        img.zoom {
            width: 100%;
            height: 200px;
            border-radius:5px;
            object-fit:cover;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }


        .transition {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }
        .modal-header {

            border-bottom: none;
        }
        .modal-title {
            color:#000;
        }
        .modal-footer{
            display:none;
        }

    </style>

</head>
<body style="background-color: #f8f7ff">

	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header ">
				<!-- Logo -->

				<div class="navbar-brand">
                    <a class="logo" href="{{ url('/') }}"> SHIGOM | RECANTO FAMILIAR  </a>
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
					<li><a href="#home">Inicio</a></li>
					<li><a href="#about">Sobre Nos</a></li>
					<li><a href="#eventos">Eventos</a></li>
                    <li><a href="#galeria">Galeria</a></li>
					<li ><a href="#sponsors">Nossos Servicos</a></li>
					<li><a href="#contact">Contacto</a></li>

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
	<div id="home">
		<!-- background image -->
		<div class="section-bg" style="background-image: url({{url('event/img/space/5.jpg')}});" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- home content -->
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content">
                            <h1>Organize seu evento conosco</h1>
                            <h2>e Desfrute dos melhores serviços.</h2>
							<a href="{{ url('/efectuarReserva') }}" class="main-btn">Agendar Evento</a>
						</div>
					</div>
					<!-- /home content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /home wrapper -->
	</div>
	<!-- /Home -->

	<!-- About -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Sobre</span> <span style="color: #dd0a37;">Nós</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-12  text-center">
					<!-- about content -->
					<div class="about-content">
						<p> O Shigom é o espaço que você precisa pra realizar o seu evento em um ambiente agradável que deixará você e seus convidados sentirem-se em um recanto familar.
                           Temos varias opcoes de eventos que voce podera desejar realizar em nosso espaco, e prestamos varios servicos que ainda podera apreciar em nossa pagina.
					<!-- /about content -->

					<!-- Numbers -->
					<div id="numbers" class="col-md-12">
						<!-- row -->
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2">
                                <h4>Estacionamento amplo</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Piscina</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Cozinha</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Ar-Condicionado</h4>
                            </div>

					</div>
					<!-- /Numbers -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /About -->
   <br><br>
	<!-- Eventos -->
	<div id="eventos" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->

            <div class="row">
                <div class="section-title">
                    <h3 class="title"><span style="color: #dd0a37;">Eventos</span></h3>
                </div>
                @foreach($dados['tipo_eventos'] as $item)
                    <div class="col-sm-10 col-lg-3 mb-0">
                        <div class="card text-center card-event ">
                            <a href="#">
                                <img class="card-img-top" src="{{ asset('images/'.$item->image)}}" alt="Related Product 1" >
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <br>
                                    <br>
                                    {{ $item->descricao}}

                                </h5>

                                <br>
                                <a class="btn btn-primary" href="{{url('/detalhes/'.$item->id)}}">Ver mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>
    <!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Eventos -->

    <div id="slide">
        <!-- container -->
        <div class="container">
            <!-- row -->

            <div class="row">


                <div id="galery-owl" class="owl-carousel owl-theme">
                @foreach($dados['imagem'] as $item)

                        <div class="galery-item">
                            <img src="{{ asset('images/'.$item->image)}}" alt="">
                        </div>
                        <!-- /galery item -->
                    @endForeach

                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /slide -->



	<!-- Event Schedule -->
	<div id="galeria" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
            <div class="row">
                <div class="section-title">
                    <h3 class="title"><span></span> <span style="color: #dd0a37;">Galeria</span></h3>

                </div>

                @foreach($dados['imagem'] as $item)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('images/'.$item->image)}}" class="fancybox" rel="ligthbox">
                            <img  src="{{ asset('images/'.$item->image)}}" class="zoom img-fluid "  alt="">

                        </a>
                    </div>
                @endforeach
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="i{{asset('event/img/space/6.jpg')}}"  class="fancybox" rel="ligthbox">
                        <img  src="{{asset('event/img/space/6.jpg')}}" class="zoom img-fluid"  alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                        <img  src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                        <img  src="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                        <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                        <img  src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                    </a>
                </div>


            </div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Event Schedule -->




	<!-- Contact -->
	<div id="contact" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Contacte</span> <span style="color: #dd0a37;">-Nos</span></h3>
				</div>
				<!-- /section title -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Endereco</h3>
						<p>2635 Bairro Jonasse, Matola</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Telefone</h3>
						<p>258 840000600</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Email</h3>
						<a href="#">shigom.rf@gmail.com</a>
					</div>
				</div>
				<!-- /contact -->


            </div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<!-- Map -->
        <div id="mapa" class="container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d205094.28362789244!2d32.501585999999996!3d-25.946547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee67ce7c4a2d935%3A0x4633f05dbf61158e!2sBoane!5e1!3m2!1spt-PT!2smz!4v1581269672085!5m2!1spt-PT!2smz" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
		<!-- /Map -->
	</div>
	<!-- /Contact -->

	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
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
				<!-- /footer logo -->

				<!-- contact social -->
{{--				<div class="col-md-4 col-md-push-4">--}}
{{--					<div class="contact-social">--}}
{{--						<a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--						<a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--						<a href="#"><i class="fa fa fa-linkedin"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}
				<!-- /contact social -->

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
	<script src="{{asset('event/js/jquery.min.js')}}"></script>
	<script src="{{asset('event/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('event/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('event/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('event/js/jquery.stellar.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="{{asset('event/js/google-map.js')}}"></script>
	<script src="{{asset('event/js/jquery.countTo.js')}}"></script>
	<script src="{{asset('event/js/main.js')}}"></script>


{{--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}


{{--        <script>--}}
{{--            window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')--}}
{{--        </script>--}}


        <script type="text/javascript">


            $(function () {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });


            $(document).ready(function(){
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function(){

                    $(this).addClass('transition');
                }, function(){

                    $(this).removeClass('transition');
                });
            });

        </script>

    </div>
</body>

</html>
