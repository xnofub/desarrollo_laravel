@extends('layouts.front')
@section('title', 'Inicio')
@section('content')

<div class="container">

        <div class="row">
            <ol class="breadcrumb">
                <li class="active">Eventos</li>
                <li class="active">Formato</li>
            </ol>
            <div class="col-md-3">
                <p class="lead">Mazos</p>
                <div class="list-group">
                    @foreach($mazos as $m)
                        <a href="#" class="list-group-item">{{$m->EVM_POSICION}} {{$m->ToMazos->MAZ_NOMBRE}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                

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