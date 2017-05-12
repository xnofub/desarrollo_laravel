@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

    <div align="center">
        <table class="table">
            <tr >
                <th>ID</th>
                <th>NOMBRE</th>
                <th colspan="2">-</th>
            </tr>
            
            @foreach($mazos as $m)
            <tr>
                <td> {{ $m->MAZ_ID }}</td>
                <td> {{ $m->MAZ_NOMBRE }}</td>
            </tr>
            @endforeach         
        </table>
        
        <nav class="paginacion">
            {!! $mazos->render() !!}
        </nav>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection