<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    
    {!! Html::style('flat_theme/css/bootstrap.min.css') !!}
    {!! Html::style('flat_theme/css/font-awesome.min.css') !!}
    {!! Html::style('flat_theme/css/prettyPhoto.css') !!}
    {!! Html::style('flat_theme/css/animate.css') !!}
    {!! Html::style('flat_theme/css/main.css') !!}

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]      
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="flat_theme/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="flat_theme/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="flat_theme/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="flat_theme/images/ico/apple-touch-icon-57-precomposed.png">--> 
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }} "><img src="{{ url('flat_theme/images/logo_ft.png') }}" alt="logo" width="200px"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{!!URL::to('/')!!}">Home</a></li>
                            <li><a href="{!!URL::to('/formato/2')!!}">Moderno</a></li>
                            <li><a href="{!!URL::to('/formato/1')!!}">Estandar</a></li>
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Publicaciones <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/publicaciones/1') }}"><i class="fa fa-btn fa-sign-out"></i>Articulos</a></li>
                                        <li><a href="{{ url('/publicaciones/2') }}"><i class="fa fa-btn fa-sign-out"></i>Noticias</a></li>
                                        <li><a href="{{ url('/publicaciones/3') }}"><i class="fa fa-btn fa-sign-out"></i>Otros</a></li>
                                    </ul>
                            </li>
                            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                                <li><a href="{!!URL::to('/home')!!}">Admin</a></li>
                            @endif
                </ul>
            </div>
        </div>
    </header><!--/header-->
    
    @yield('content')

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://fetchtutor.cl/" title="Greatness at any cost">Fetchtutor</a>.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="{!!URL::to('/')!!}">Home</a></li>
                        <li><a href="{!!URL::to('/formato/2')!!}">Moderno</a></li>
                        <li><a href="{!!URL::to('/formato/1')!!}">Estandar</a></li>
                        <li><a href="{{url('/contacto')}}">Contacto</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    {!! Html::script('flat_theme/js/jquery.js') !!}
    {!! Html::script('flat_theme/js/bootstrap.min.js') !!}
    {!! Html::script('flat_theme/js/jquery.prettyPhoto.js') !!}
    {!! Html::script('flat_theme/js/main.js') !!}
    @yield('js')
     <script type="text/javascript">
            $(document).ready(function () {
                $('.modal').on('hidden.bs.modal', function () {
                        $(".modal-body").html("");
                        $(this).removeData('bs.modal');
                });
            });
        </script>
    
</body>
</html>