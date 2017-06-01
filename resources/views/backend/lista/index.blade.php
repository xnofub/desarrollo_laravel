@extends('layouts.master')
@section('title', 'Lista')
@section('content')

@include('layouts.flash')

<div class="row">
    <div class="well">
        
        <p><b> Nombre Mazo : </b> {{$eventoMazo->EVM_NOMBRE_MAZO}}</p>
        <p><b> Evento : </b> {{$eventoMazo->ToEventos->EVN_NOMBRE}}</p>
        <p><b> Tipo  : </b> {{$eventoMazo->ToMazos->MAZ_NOMBRE}}</p>
        <p><b> Jugador : </b> {{$eventoMazo->ToJugadores->JGD_NOMBRE}}</p>
            
    </div>
    <div class='col-lg-12'>
        {{Form::open(array('id' => 'formcarta'))}}
        <div class="form-group col-lg-4">
             {{Form::label('Carta','Nombre')}}            
             {{Form::text('nombre',null,[ 'id'=>'nombre' , 'class'=>'form-control' ])}}            
             {{Form::label('tipocarta','Tipo')}}            
             {{Form::select('tipocarta', $tiposcarta, null, array('class' => 'form-control','id'=>'tipocarta'))}}
             {{Form::label('cantidad','Cantidad')}}            
             {{Form::text('cantidad',null,[ 'id'=>'cantidad' , 'class'=>'form-control' ])}} 
             {{link_to('#',$title='Registrar',$attributes = ['id'=>'enviar','class'=>'btn btn-primary'])}}
        </div>
        {{Form::close()}}
        
        
        
    </div>
    <div class='col-lg-12'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Carta</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    
</div>



@endsection
@section('js')
<script type="text/javascript">
$( "#enviar" ).click(function() {
    //alert('click');
    var data_form = $("#formcarta").serialize();
    var token  = $('#token').val();
    var url = "{!!URL::to('/lista')!!}";
    //alert(ruta);
        $.ajax({
        jeaders: {"X-CSRF-TOKEN": token},
        method: "POST",
        url: url,
        data: data_form,
        dataType: "json"
      });
}); 
</script>
@endsection
