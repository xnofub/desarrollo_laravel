@extends('layouts.master')
@section('title', 'Eventos')
@section('content')

@include('layouts.flash')

<a class="btn btn-success pull-right btn_ok" data-toggle="modal" data-target="#myModal" href="{!! URL::to('participantes/scoreparticipantes/'.$evento->EVN_ID) !!}">Agregar</a>

<table class="table table-striped table-condensed table-hover">
    <thead>
        <tr>
            <th>POSICIÓN</th>
            <th>NOMBRE MAZO</th>
            <th>TIPO MAZO</th>
            <th>JUGADOR</th>
            <th>EVENTO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participantes as $p)
        <tr>
            <td>{{$p->EVM_POSICION}}</td>
            <td>{{$p->EVM_NOMBRE_MAZO}}</td>
            <td>{{$p->ToMazos->MAZ_NOMBRE}}</td>
            <td>{{$p->ToJugadores->JGD_NOMBRE}}</td>
            <td>{{$p->ToEventos->EVN_NOMBRE}}</td>
            <td>
                <a class="btn btn-default btn-xs btn-warning edit" data-toggle="modal" data-target="#myModal" title="Editar" href="{{ url('participantes/editscoreparticipantes/' . $p->EVM_ID . '') }}"> Editar</i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" id="modal_body">
            
            <div class="modal-body" >
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div> 

@endsection
@section('js')
<script type="text/javascript">
    
        
        
    
</script>
@endsection
