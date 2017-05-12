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
                        <a class="navbar-brand" href="#">DM</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            
                            <li><a href="#contact">Formatos</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mantenedores
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{!!URL::to('/mazos')!!}">Mazos</a></li>
                                    <li><a href="#">Jugadores</a></li>
                                    <li><a href="#">Tiendas</a></li>
                                    <li><a href="#">Eventos</a></li>
                                    <li><a href="#">Formatos</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">Contacto</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <div class="container theme-showcase" role="main">
            @yield('content')
        </div>
        <!-- Scripts -->
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>