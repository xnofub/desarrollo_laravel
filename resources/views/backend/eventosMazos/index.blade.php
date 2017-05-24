@extends('layouts.master')
@section('title', 'Eventos')
@section('content')

@include('layouts.flash')

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar</button>


<table class="table table-striped table-condensed table-hover">
    <thead>
        <tr>
            <th>POSICIÓN</th>
            <th>MAZO</th>
            <th>JUGADOR</th>
            <th>EVENTO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participantes as $p)
        <tr>
            <td>{{$p->EVM_POSICION}}</td>
            <td>{{$p->ToMazos->MAZ_NOMBRE}}</td>
            <td>{{$p->ToJugadores->JGD_NOMBRE}}</td>
            <td>{{$p->ToEventos->EVN_NOMBRE}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">AGREGAR JUGADOR</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::label('EVENTO', 'EVENTO', array('class' => 'col-lg-3')) !!}
                        <div class="col-lg-9">
                            {!! Form::text('EVENTO',$evento->EVN_NOMBRE, ['class' => 'form-control','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        {!! Form::label('BUSCADOR', 'BUSCADOR DCI', array('class' => 'col-lg-3')) !!}
                        <div class="col-lg-9">
                            {!! Form::text('JGD_DCI','', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        {!! Form::label('JUGADOR', 'JUGADOR', array('class' => 'col-lg-3')) !!}
                        <div class="col-lg-9">
                            {!! Form::select('JGD_ID', $jugadores, '', array('class' => 'form-control col-lg-6')) !!}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        {!! Form::label('POSICION', 'POSICIÓN', array('class' => 'col-lg-3')) !!}
                        <div class="col-lg-9">
                            {!! Form::text('EVM_POSICION','', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="col-lg-9"> </div>
                        <div class="col-lg-3"> 
                            <button type="button" class="btn btn-success"> AGREGAR </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            -->
        </div>

    </div>
</div>


@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection
