@extends('layouts.front')
@section('title', 'Inicio')
@section('content')


<section id="pricing" class="no-margin">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./img/home01.png" alt="" data-holder-rendered="true"/>
                </div>
                <div class="item">
                    <img src="./img/home01.png" alt="" data-holder-rendered=""/>
                </div>
                <div class="item">
                    <img src="./img/home01.png" alt="" data-holder-rendered=""/>
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
</section><!--/#main-slider-->


    <section id="blog" class="container">
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">
                <div class="widget ads">
                    
                </div><!--/.ads-->     

                <div class="widget categories">
                    <h3>Recientes</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="arrow">
                                <h4> Ultimos Articulos </h4>
                                 @foreach($post as $p)
                                    <li ><a href="{{ url('/articulo/'.$p->PST_ID) }}"><em>{{$p->PST_TITULO}}</em> </a></li>
                                 @endforeach
                            </ul>
                        </div>
                        
                        
                        <div class="col-sm-12">
                            <ul class="arrow">
                                <h4> Ultimos Eventos </h4>
                                    @foreach($eventos as $e)
                                        <li ><a href="{{ url('/evento/'.$e->EVN_ID) }}"> {{$e->EVN_FECHA}}  {{$e->EVN_NOMBRE}} {{$e->ToTiendas->TND_NOMBRE}} </a></li> 
                                    @endforeach
                                 @foreach($post as $p)
                                    <li ><a href="{{ url('/articulo/'.$p->PST_ID) }}"><em>{{$p->PST_TITULO}}</em> </a></li>
                                 @endforeach
                            </ul>
                        </div>
                        
                    </div>                     
                </div><!--/.categories-->
                

                
            </aside>        
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    
                     @foreach($post as $p)
                    <div class="blog-item">
                        <div class="blog-content">
                            <h3>{{$p->PST_TITULO}}</h3>
                            <p class="lead"> {{$p->PST_DESCRIPCION}}.</p>
                            <div class="tags">
                                <a href="{{ url('/articulo/'.$p->PST_ID) }}" class="btn btn-info">Leer más</a>
                            </div>
                        </div>
                    </div><!--/.blog-item-->
                    @endforeach
                    
                    
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </section>
    

@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection