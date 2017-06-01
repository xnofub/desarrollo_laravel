@extends('layouts.master')
@section('title', 'Lista')
@section('content')

@include('layouts.flash')

<div class="row">
    <div class="well">
        
        <p><b> Nombre Mazo : </b> {{$eventoMazo->EVM_NOMBRE_MAZO}}</p>
        <p><b> Evento : </b> {{$eventoMazo->ToEventos->EVN_NOMBRE}}</p>
        <p><b> Tipo  : </b> {{$eventoMazo->ToMazos->MAZ_NOMBRE}}</p>
        <p><b> Jugador : </b> {{$eventoMazo->ToJugadores->JGD_NOMBRE}}</p>
            
    </div>
    <div class='col-lg-12'>
        
        
        
        
    </div>
    <div class='col-lg-12'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Carta</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    
</div>



@endsection
@section('js')
<script type="text/javascript">
    
        
        
    
</script>
@endsection
