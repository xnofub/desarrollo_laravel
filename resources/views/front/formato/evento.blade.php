@extends('layouts.front')
@section('title', 'Evento')
@section('content')
<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Listados del evento </h1>
                    <p> </p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Formato</a></li>
                        <li><a href="#">Evento</a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>


<section id="blog" class="container">
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">
                <div class="widget categories">
                    <h3>Articulos recientes</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="arrow">
                               @foreach($articulos as $a)
                                    <li><a href="{{ url('/articulo/'.$a->PST_ID) }}">{{$a->PST_TITULO}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>                     
                </div><!--/.categories-->
                <!-- <div class="widget facebook-fanpage">
                    <h3>Facebook Fanpage</h3>
                    <div class="widget-content">
                        <div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/groups/423462367843879/" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=144716315690681&amp;container_width=360&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fshapebootstrap&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=292"><span style="vertical-align: bottom; width: 292px; height: 214px;"><iframe name="f2168cd3d27de1" width="292px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=144716315690681&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df3dc75e9601b84c%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff12216e4c754a6%26relation%3Dparent.parent&amp;container_width=360&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fshapebootstrap&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=292" style="border: none; visibility: visible; width: 292px; height: 214px;" class=""></iframe></span></div>
                    </div>
                </div> -->
            </aside>        
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div class="blog-item">
                        <div class="blog-content">
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
                    </div><!--/.blog-item-->
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </section>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        
    });
    
</script>
@endsection