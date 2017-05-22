@extends('layouts.master')
@section('title', 'Eventos')
@section('content')

@include('layouts.flash')

{{link_to_route('eventos.create', 'Agregar', $parameters = null , $attributes = ['class'=>'btn btn-success'])}}


<table class="table">
    <thead>
        <tr>
            <th>FECHA</th>
            <th>NOMBRE</th>
            <th>FORMATO</th>
            <th>TIENDA</th>
            <th colspan='2'>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eventos as $e)
        <tr>
            <td>{{$e->EVN_FECHA}}</td>
            <td>{{$e->EVN_NOMBRE}}</td>
            <td>{{$e->ToFormatos->FTO_NOMBRE}}</td>
            <td>{{$e->ToTiendas->TND_NOMBRE}}</td>
            <td>Editar</td>
            <td>Listas</td>
        </tr>    
        @endforeach
    </tbody>
</table>


<nav class="paginacion">
    {!! $eventos->render() !!}
</nav>

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        
        
    });
</script>
@endsection