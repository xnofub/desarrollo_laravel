@extends('layouts.front')
@section('title', 'Evento')
@section('content')

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li class="active">Eventos</li>
            <li class="active">Formato</li>
        </ol>

         
        <div class="col-lg-9 col-sm-8 col-xs-12">
            
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Mazo</th>
                        <th>Posición</th>
                        <th>Jugador</th>
                        <th>Evento</th>
                        <th>Formato</th>
                        <th>Fecha</th>
                        <th>Tienda</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mazos as $m)
                    <tr>
                        <td> <b><a href="{{ url('/deck/'.$m->EVM_ID) }}">{{$m->ToMazos->MAZ_NOMBRE}}</a></b></td>
                        <td> {{$m->EVM_POSICION}} </td>
                        <td> {{$m->ToJugadores->JGD_NOMBRE}} </td>
                        <td> {{$m->ToEventos->EVN_NOMBRE}} </td>
                        <td> {{$m->ToEventos->ToFormatos->FTO_NOMBRE}} </td>
                        <td> {{$m->ToEventos->EVN_FECHA}} </td>
                        <td> {{$m->ToEventos->ToTiendas->TND_NOMBRE}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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

@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection