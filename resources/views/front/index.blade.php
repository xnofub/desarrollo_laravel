@extends('layouts.front')
@section('title', 'Inicio')
@section('content')

<div class="container theme-showcase" role="main">
    
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./img/home01.jpg" alt="" data-holder-rendered="true"/>
                </div>
                <div class="item">
                    <img src="./img/home01.jpg" alt="" data-holder-rendered=""/>
                </div>
                <div class="item">
                    <img src="./img/home01.jpg" alt="" data-holder-rendered=""/>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                
                @foreach($post as $p)
                
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>{{$p->PST_TITULO}} </h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            {{$p->PST_DESCRIPCION}}
                        </p>
                        <a href="{{ url('/articulo/'.$p->PST_ID) }}" class="btn btn-info">Leer más</a>
                    </div>
                </div>
                <?php 
                /*
                <div class="blog-post">
                    <h2 class="blog-post-title">{{$p->PST_TITULO}}</h2>
                    <p class="blog-post-meta">{{$p->PST_FECHA}}</p>

                    <p>{{$p->PST_DESCRIPCION}}.</p>
                    <p><a href="{{ url('/articulo/'.$p->PST_ID) }}"> <em>Lee mas</em> </a></p>
                    
                </div><!-- /.blog-post -->
                 */
                ?>
                 
                    <?php
                        /*
                      <div class="col-md-12 portfolio-item ">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="#">{{$p->PST_TITULO}}</a></h3>
                                </div>
                                <div class="panel-body">
                                    <em>{{$p->PST_FECHA}}</em>  
                                    <br>
                                    {{$p->PST_DESCRIPCION}}
                                </div>
                            </div>
                            
                        </div>
                         */
                      ?>
                @endforeach
            </div>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <!-- <div class="well">
                    <h4>Articulo/Noticia/Evento </h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    
                </div>
            -->
            <h4> Ultimos Eventos </h4>
            @foreach($eventos as $e)
            <div class="sidebar-module sidebar-module-inset">
                <a href="{{ url('/evento/'.$e->EVN_ID) }}"> {{$e->EVN_FECHA}} {{$e->ToFormatos->FTO_NOMBRE}}  </a> 
                <p>  <em>{{$e->EVN_NOMBRE}}</em> 
                    <br>
                    {{$e->ToTiendas->TND_NOMBRE}}
                    <br>

                </p>
            </div>
            @endforeach

            <div class="sidebar-module">
                
                
                <h4>Articulos</h4>
                <ol class="list-unstyled">
                    @foreach($post as $p)
                        <li ><a href="{{ url('/articulo/'.$p->PST_ID) }}"><em>{{$p->PST_TITULO}}</em> </a></li>
                    @endforeach
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Noticias</h4>
                <ol class="list-unstyled">
                   @foreach($noticias as $p)
                    <li><a href="{{ url('/articulo/'.$p->PST_ID) }}">{{$p->PST_TITULO}}</a></li>
                    @endforeach
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div>
</div>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection