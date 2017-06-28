<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/theme.css') !!}
        {!! Html::style('assets/css/ie10-viewport-bug-workaround.css') !!}
        {!! Html::style('assets/css/bootstrap-datepicker.standalone.css') !!}
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{!!URL::to('/')!!}"> FT </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                        <ul class="nav navbar-nav">
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
                            <li><a href="#about">Contacto</a></li>
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
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <div class="container-fluid" >
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted"><b>EQUIPO FETCHTUTOR</b></p>
            </div>
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                ga('create', 'UA-101354326-1', 'auto');
                ga('send', 'pageview');
            </script>
        </footer>
        <!-- Scripts -->
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/bootstrap-datepicker.js') !!}
        @yield('js')
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('.modal').on('hidden.bs.modal', function () {
                        $(this).removeData('bs.modal');
                });
            });
        </script>
    </body>
</html>