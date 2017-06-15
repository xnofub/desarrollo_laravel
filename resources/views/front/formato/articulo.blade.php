@extends('layouts.front')
@section('title', 'Articulo')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-8 col-xs-12">
                {!!$post->PST_TEXTO!!}
            </div>
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