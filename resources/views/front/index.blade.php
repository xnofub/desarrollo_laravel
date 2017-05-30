@extends('layouts.front')
@section('title', 'Inicio')
@section('content')
<div class="container theme-showcase" role="main">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="./img/home01.jpg" alt="" data-holder-rendered="true"/>
          </div>
          <div class="item">
            <img src="./img/home01.jpg" alt="" data-holder-rendered=""/>
          </div>
          <div class="item">
            <img src="./img/home01.jpg" alt="" data-holder-rendered=""/>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
    <div class="page-header">
        <h1>Ultimos Eventos</h1>
    </div>
    <div class="row">
        <div class='col-lg-6'> 
            <div class="well">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            
            <div class="table-responsive">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>FECHA</th>
            <th>NOMBRE</th>
            <th>TIENDA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eventos as $e)
        <tr>
            <td>{{$e->EVN_FECHA}}</td>
            <td>{{$e->EVN_NOMBRE}}</td>
            <td>{{$e->ToTiendas->TND_NOMBRE}}</td>
        </tr>    
        @endforeach
    </tbody>
</table>
</div>
        </div>    
        <div class='col-lg-6'> 
            <div class="well">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
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