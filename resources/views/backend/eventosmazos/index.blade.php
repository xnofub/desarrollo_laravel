@extends('layouts.master')
@section('title', 'Eventos')
@section('content')

@include('layouts.flash')
<div class="row">
<a class="btn btn-success pull-right btn_ok" data-toggle="modal" data-target="#myModal" href="{!! URL::to('participantes/scoreparticipantes/'.$evento->EVN_ID) !!}">Agregar</a>
</div>

   
<div>

</div>
<div class="row">
    @foreach($participantes as $p)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="list-group">
                <div class="list-group-item">
                    <div>
                        <label>Posicion: </label>
                        {{$p->EVM_POSICION}}
                        
                        <label>Nombre Mazo: </label>
                        {{$p->EVM_NOMBRE_MAZO}}
                        
                        <label>Tipo Mazo: </label>
                        {{$p->ToMazos->MAZ_NOMBRE}}
                        
                        <label>Jugador: </label>
                        {{$p->ToJugadores->JGD_NOMBRE}}
                        
                        <label>Evento: </label>
                        {{$p->ToEventos->EVN_NOMBRE}}
                                <br>
                        <label>Editar: </label>
                        <a class="btn btn-default btn-xs btn-warning edit" data-toggle="modal" data-target="#myModal" title="Editar" href="{{ url('participantes/editscoreparticipantes/' . $p->EVM_ID . '') }}"> Editar</i></a>
                                <br>
                        
                        {!! Form::model($p, array('route' => array('participantes.destroy', $p->EVM_ID), 'method'=>'DELETE', 'class' => 'form-horizontal editar', 'role'=>'form')) !!}
                            {!! Form::hidden('EVN_ID',$evento->EVN_ID, ['class' => 'form-control','readonly'=>'readonly']) !!}
                            {!! Form::hidden('EVM_ID',$p->EVM_ID, ['class' => 'form-control','readonly'=>'readonly']) !!}
                            <label>Eliminar: </label>
                            <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-minus-sign"></span></button>
                        {!! Form::close() !!}
                        <label>Lista: </label>
                        <a class="btn btn-default btn-xs btn-primary edit"  title="Editar" href="{{ url('lista/' . $p->EVM_ID . '') }}"> <span class="glyphicon glyphicon-plus-sign"></span></a>
                                
                        
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
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
