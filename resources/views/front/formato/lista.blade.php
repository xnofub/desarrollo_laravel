@extends('layouts.front')
@section('title', 'Lista')
@section('content')

<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{$mazo->ToJugadores->JGD_NOMBRE}} </h1>
                    <p>{{$mazo->EVM_POSICION}} {{$mazo->EVM_NOMBRE_MAZO}} (MAIN: {{$countMain}}  SB:{{$countSb}}) </p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Formato</a></li>
                        <li><a href="#">Lista</a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>
<section id="pricing">
        <div class="container">
            <div id="pricing-table" class="row">
                 <div class="col-lg-4 col-sm-4 col-xs-12"> 
                     <div class="list-group">
                        <a href="#" class="list-group-item active"><h4> Mazos Mismo Evento  </h4></a>
                        @foreach($otrosmazos as $m)
                        <a href="{{ url('/deck/'.$m->EVM_ID) }}" class="list-group-item">{{$m->EVM_POSICION}} - {{$m->ToMazos->MAZ_NOMBRE}}</a>
                        @endforeach
                    </div>
                 </div>
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="col-lg-6">
                         @if (count($listaLands) > 0)
                        <ul class="list-group">
                            <li class="list-group-item active"><h4> Tierras <em>{{$countLands}}</em></h4></li>
                            @foreach($listaLands as $l)
                            <li class="list-group-item list-group-item-info">
                                <b>{{$l->LST_CANTIDAD}}x</b>  
                                <a class="preview" href="{{$l->ToCartas->CRT_IMAGEN}}" rel="prettyPhoto">
                                    {{$l->ToCartas->CRT_NOMBRE}} 
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                         @if (count($listaCriat) > 0)
                        <ul class="list-group">
                            <li class="list-group-item active"><h4> Criaturas <em>{{$countCriat }}</em> </h4></li>
                                @foreach($listaCriat as $l)
                                <li class="list-group-item list-group-item-info">
                                    <b>{{$l->LST_CANTIDAD}}x</b>  
                                    <a class="preview" href="{{$l->ToCartas->CRT_IMAGEN}}" rel="prettyPhoto">
                                    {{$l->ToCartas->CRT_NOMBRE}} 
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        @endif

                        
                    </div>
                    <div class="col-lg-6">
                    @if (count($listaOther) > 0)
                        <ul class="list-group">
                            <li class="list-group-item active"><h4> Otros  <em>{{$countOther}}</em></h4></li>
                            @foreach($listaOther as $l)
                            <li class="list-group-item list-group-item-info">
                                <b>{{$l->LST_CANTIDAD}}x</b>  
                                <a class="preview" href="{{$l->ToCartas->CRT_IMAGEN}}" rel="prettyPhoto">
                                    {{$l->ToCartas->CRT_NOMBRE}} 
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    @endif    
                        
                    @if (count($listaInstSor) > 0)
                        <ul class="list-group">
                            <li class="list-group-item active"><h4> Inst. y Conjuros <em>{{$countInstSor}}</em></h4></li>
                            @foreach($listaInstSor as $l)
                            <li class="list-group-item list-group-item-info">
                                <b>{{$l->LST_CANTIDAD}}x</b>  
                                <a class="preview" href="{{$l->ToCartas->CRT_IMAGEN}}" rel="prettyPhoto">
                                    {{$l->ToCartas->CRT_NOMBRE}} 
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    @endif
                        
                       
                    @if (count($listaSb) > 0)
                        <ul class="list-group">
                            <li class="list-group-item"><h4> Banquillo <em>{{$countSb}}</em></h4></li>
                            @foreach($listaSb as $l)
                            <li class="list-group-item list-group-item-warning">
                                <b>{{$l->LST_CANTIDAD}}x</b>
                                <a class="preview" href="{{$l->ToCartas->CRT_IMAGEN}}" rel="prettyPhoto">
                                    {{$l->ToCartas->CRT_NOMBRE}} 
                                </a>
                                <div class="overlay">
                                                  
                             </div>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                    </div>
                    
                </div>
                
                
            </div>
        </div>
</section>>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-8 col-xs-12">
            
            
            
            
            
            
            
            


            
        </div>







    </div>
</div>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="modal_body">
            <div class="modal-body" >

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

