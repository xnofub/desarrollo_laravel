@extends('layouts.master')
@section('title', 'Jugadores')
@section('content')


<!-- <button type="button" class="btn btn-xs btn-success"><a href="{!!URL::to('/mazos/create')!!}" > AGREGAR </a> </button> -->
{{link_to_route('jugadores.create', 'Agregar', $parameters = null , $attributes = ['class'=>'btn btn-success'])}}
<div align="center">
        <table class="table">
            <tr >
                <th>ID</th>
                <th>Nombre</th>
                <th>Formato</th>
                <th colspan="2">Opciones</th>
            </tr>

            @foreach($jugadores as $j)
            
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td>  </td>
                <td> </td>
            </tr>
            @endforeach         
        </table>

        <nav class="paginacion">
            {!! $jugadores->render() !!}
        </nav>
</div>

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        
    });
</script>
@endsection