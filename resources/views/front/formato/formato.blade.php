@extends('layouts.front')
@section('title', 'Formato')
@section('content')
<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Eventos Recientes</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Formato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section id="pricing">
        <div class="container">
            <div id="pricing-table" class="row">
                
                <div class="col-lg-9">
                <nav class="paginacion">
                                {!! $eventos->render() !!}
                </nav>
                @foreach($eventos as $e)
                <div class="col-md-4 col-xs-12">
                    <ul class="plan plan1">
                        <li class="plan-name">
                            <h3>{{$e->ToTiendas->TND_NOMBRE}}</h3>
                        </li>
                        <li>
                            <strong>{{$e->EVN_NOMBRE}}</strong> 
                        </li>
                        <li>
                            <strong>{{$e->ToFormatos->FTO_NOMBRE}}</strong> 
                        </li>
                        
                        <li>
                            <strong>{{$e->EVN_FECHA}}</strong>
                        </li>
                        
                        <li class="plan-action">
                            <a href="{{ url('/evento/'.$e->EVN_ID) }}" class="btn btn-primary btn-md">Ver Torneo</a>
                        </li>
                    </ul>
                </div><!--/.col-md-3-->
                @endforeach
                </div>
                <div class="col-lg-3">
                    <div class="list-group">
                    <a href="#" class="list-group-item active">Mazos</a>
                        <table class="table">
                            @foreach($mazos as $m)
                             <tr class="list-group-item ">
                                 <td> <b><em>{{$m->PORCENTAJE}}%</em></b> </td>
                                <td > <a href="{{ url('/decks/'.$m->MAZ_ID) }}" class="">{{$m->MAZ_NOMBRE}} </a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div> 
                
        </div>
    </section>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection