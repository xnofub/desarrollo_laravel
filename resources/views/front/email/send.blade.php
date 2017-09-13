@extends('layouts.front')
@section('title', 'Contacto')
@section('content')
<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contacto </h1>
                    <p>Enviamos tu duda, o listado de algun evento a través de este formulario.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<div class="container">
    <div class="row">
        @include('layouts.flash')
        <div class="col-lg-9 col-sm-9 col-xs-12">
            {!! Form::open(['route' => 'contacto.store', 'method' => 'POST', 'class' => 'form-horizontal crear','role'=>'form']) !!}
                    <div class="form-group">
                        <label for="pwd">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" >
                    </div>
            
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                    </div>
                    <!-- <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div> -->
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn_ok">Enviar</button>
                    </div>
            {!! Form::close() !!}
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12">
            <h4>Articulos</h4>
                <ol class="list-unstyled">
                    @foreach($post as $p)
                        <li ><a href="{{ url('/articulo/'.$p->PST_ID) }}"><em>{{$p->PST_TITULO}}</em> </a></li>
                    @endforeach
                </ol>
            
            
            <h4>Noticias</h4>
                <ol class="list-unstyled">
                   @foreach($noticias as $p)
                    <li><a href="{{ url('/articulo/'.$p->PST_ID) }}">{{$p->PST_TITULO}}</a></li>
                    @endforeach
                </ol>
        </div>
        
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection