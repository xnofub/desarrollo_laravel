@extends('layouts.front')
@section('title', 'Publicaciones')
@section('content')
<div class="container">
    
    <div class="row">
         
                    <ol class="breadcrumb"> 
                        <li> Publicaciones  </li>
                    </ol>
        <div class="col-lg-9 col-sm-8 col-xs-12">
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
            @endforeach
            <nav class="paginacion">
                    {!! $post->render() !!}
            </nav>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-12">
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