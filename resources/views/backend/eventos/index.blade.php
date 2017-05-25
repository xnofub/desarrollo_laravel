@extends('layouts.master')
@section('title', 'Eventos')
@section('content')

@include('layouts.flash')

{{link_to_route('eventos.create', 'Agregar', $parameters = null , $attributes = ['class'=>'btn btn-success'])}}

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>FECHA</th>
            <th>NOMBRE</th>
            <th>FORMATO</th>
            <th>TIENDA</th>
            <th colspan='3'>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eventos as $e)
        <tr>
            <td>{{$e->EVN_ID}}</td>
            <td>{{$e->EVN_FECHA}}</td>
            <td>{{$e->EVN_NOMBRE}}</td>
            <td>{{$e->ToFormatos->FTO_NOMBRE}}</td>
            <td>{{$e->ToTiendas->TND_NOMBRE}}</td>
            <td>{{link_to_route('eventos.edit', 'editar', $parameters = $e->EVN_ID , $attributes = ['class'=>'btn btn-xs btn-warning'])}}</td>
            <td>
                {!! Form::model($e, array('route' => array('eventos.destroy', $e->EVN_ID), 'method'=>'DELETE', 'class' => 'form-horizontal editar', 'role'=>'form')) !!}
                    <button type="submit" class="btn btn-xs btn-danger">Eliminar</button>
                {!! Form::close() !!}
            </td>
            <td>{{link_to_route('participantes.show', 'Participantes', $parameters = $e->EVN_ID , $attributes = ['class'=>'btn btn-xs btn-success'])}}</td>
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