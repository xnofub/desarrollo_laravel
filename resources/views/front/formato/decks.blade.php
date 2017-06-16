@extends('layouts.front')
@section('title', 'Lista')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xs-12">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Mazos</a>
                        <table class="table">
                            @foreach($otherdecks as $m)
                             <tr class="list-group-item @if($m->MAZ_ID == $id) ? list-group-item-success :  @endif ">
                                 <td> <b><em>{{$m->PORCENTAJE}}%</em></b> </td>
                                <td > <a href="{{ url('/decks/'.$m->MAZ_ID) }}" class="">{{$m->MAZ_NOMBRE}} </a></td>
                            </tr>
                            @endforeach
                        </table>
                </div>
        </div>
        <div class="col-md-9 col-lg-9 col-xs-12">
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
    </div>
</div>
        


@endsection
@section('js')
<script>
    $(document).ready(function () {

    });

</script>
@endsection
