@extends('layouts.front')
@section('title', 'Articulo')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <ol class="breadcrumb"> 
                    <li> Publicaciones  </li>
                </ol>
            </div>
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
        
        
    </div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="modal_body">
            <div class="modal-body" >
                
            </div>
            
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