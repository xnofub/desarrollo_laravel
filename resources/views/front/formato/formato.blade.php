@extends('layouts.front')
@section('title', 'Formato')
@section('content')

<div class="container">

        <div class="row">
            <ol class="breadcrumb">
                <li class="active">Eventos</li>
                <li class="active">Formato</li>
            </ol>
            

            <div class="col-md-9">

                <div class="thumbnail">
                    <!-- <img class="img-responsive" src="../img/screen1.jpg" alt=""> -->
                    <div class="caption-full">
                        <!--  <h4 class="pull-right">$24.99 </h4>
                        <h4><a href="#">Eventos</a>
                        </h4>
                        -->
                        @foreach($eventos as $e)
                        
                        <div class="col-md-4 portfolio-item ">
                            
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="{{ url('/evento/'.$e->EVN_ID) }}">{{$e->EVN_NOMBRE}}</a></h3>
                                </div>
                                <div class="panel-body">
                                    <em>{{$e->EVN_FECHA}}</em>  
                                    <br>
                                    Formato : {{$e->ToFormatos->FTO_NOMBRE}}  </a> 
                                    <br>
                                    Tienda : {{$e->ToTiendas->TND_NOMBRE}}
                                    <br>
                                </div>
                            </div>
                            
                        </div>
                        
                        @endforeach
                        
                        <div class="col-lg-12">
                            <nav class="paginacion">
                                {!! $eventos->render() !!}
                            </nav>
                        </div>
                        

                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
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

@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection