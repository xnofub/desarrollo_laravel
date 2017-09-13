@extends('layouts.front')
@section('title', 'Publicaciones')
@section('content')

<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Articulos & Publicaciones</h1>
                    <p>Contenido generado por colaboradores.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Articulos & Publicaciones</a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>


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