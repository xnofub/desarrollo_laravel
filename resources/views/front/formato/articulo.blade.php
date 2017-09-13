@extends('layouts.front')
@section('title', 'Articulo')
@section('content')
<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{!!$post->PST_TITULO!!}</h1>
                    <p>{!!$post->PST_DESCRIPCION!!}.</p>
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
            <div class="col-lg-9 col-sm-9 col-xs-12">
                {!!$post->PST_TEXTO!!}
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12">
               <div class="sidebar-module">
                    <h4>Noticias</h4>
                    <ol class="list-unstyled">
                       @foreach($noticias as $p)
                        <li><a href="{{ url('/articulo/'.$p->PST_ID) }}">{{$p->PST_TITULO}}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <!--
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="list-group">
                    <a href="#" class="list-group-item active"> <h4>Próximos Eventos</h4> </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                    <a href="#" class="list-group-item">Proximo Evento 1 </a>
                </div>
            </div>  
            -->
        </div>
</section>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection