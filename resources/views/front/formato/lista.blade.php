@extends('layouts.front')
@section('title', 'Lista')
@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-lg-12"> 
            <ol class="breadcrumb"> 
                <li> {{$mazo->EVM_POSICION}}</li>
                <li> {{$mazo->EVM_NOMBRE_MAZO}}</li>
                <li> {{$mazo->ToJugadores->JGD_NOMBRE}}</li>
            </ol>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item active"><h4> Maindeck </h4></li>
                @foreach($listaMain as $l)
                <li class="list-group-item list-group-item-info">
                    <b>{{$l->LST_CANTIDAD}}x</b>  
                    <a class="" data-toggle="modal" data-target="#myModal" title="Editar" href="{{ url('lista/' . $l->LST_ID . '/edit') }}"> 
                     {{$l->ToCartas->CRT_NOMBRE}}    
                    </a>
                </li>
                @endforeach
                <li class="list-group-item active">Total: {{$countMain}} </li>
                
            </ul>
        </div>    
        <div class="col-lg-4 col-sm-4 col-xs-12">
            
            <ul class="list-group">
                <li class="list-group-item active"><h4> Sideboard </h4></li>
            @foreach($listaSb as $l)
                    <li class="list-group-item list-group-item-warning">
                        <b>{{$l->LST_CANTIDAD}}x</b>
                        <a class="" data-toggle="modal" data-target="#myModal" title="Editar" href="{{ url('lista/' . $l->LST_ID . '/edit') }}"> 
                          {{$l->ToCartas->CRT_NOMBRE}} 
                        </a>
                    </li>
            @endforeach
            <li class="list-group-item active">Total:  {{$countSb}}</li>
            </ul>

        </div>    
         <div class="col-lg-4 col-sm-4 col-xs-12">
            
            <div class="list-group">
                <a href="#" class="list-group-item active"><h4> Mazos Mismo Evento </h4></a>
                @foreach($otrosmazos as $m)
                <a href="{{ url('/deck/'.$m->EVM_ID) }}" class="list-group-item">{{$m->EVM_POSICION}} - {{$m->ToMazos->MAZ_NOMBRE}}</a>
                @endforeach
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

