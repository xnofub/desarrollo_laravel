@extends('layouts.master')
@section('title', 'Lista')
@section('content')

@include('layouts.flash')

<div class="row">
    <div class="well col-lg-6">
        
        <p><b> Nombre Mazo : </b> {{$eventoMazo->EVM_NOMBRE_MAZO}}</p>
        <p><b> Evento : </b> {{$eventoMazo->ToEventos->EVN_NOMBRE}}</p>
        <p><b> Tipo  : </b> {{$eventoMazo->ToMazos->MAZ_NOMBRE}}</p>
        <p><b> Jugador : </b> {{$eventoMazo->ToJugadores->JGD_NOMBRE}}</p>
            
    </div>
    <div class='col-lg-6'>
        {{Form::open(array('id' => 'formcarta'))}}
        <div class="form-group col-lg-12">
             {{Form::label('Carta','Nombre')}}            
             {{Form::text('NOMBRE',null,[ 'id'=>'NOMBRE' , 'class'=>'form-control' ])}}            
             {{Form::label('tipocarta','Tipo')}}            
             {{Form::select('TCR_ID', $tiposcarta, null, array('class' => 'form-control','id'=>'TCR_ID'))}}
             {{Form::label('ID_CARTA','Carta')}}   
             <select name="ID_CARTA" id="ID_CARTA" class="form-control" >
                 <option value="null">SELECCIONE CARTA</option>
             </select>
             {{Form::label('cantidad','Cantidad')}}            
             {{Form::text('CANTIDAD',null,[ 'id'=>'CANTIDAD' , 'class'=>'form-control' ])}} 
             {{link_to('#',$title='Registrar',$attributes = ['id'=>'enviar','class'=>'btn btn-primary'])}}
             {{Form::hidden('EVM_ID',$eventoMazo->EVM_ID,[ 'id'=>'EVM_ID' , 'readonly'=>'readonly' ])}}
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
            <tbody id="bodytable">
                @foreach($listaCartas as $l)
                <tr>
                    <td>{{$l->LST_CANTIDAD}}</td>
                    <td>{{$l->LST_NOMBRE_CARTA}}</td>
                    <td>{{$l->ToTipoCarta->TCR_NOMBRE}}</td>
                    <td>{{$l->LST_ID}}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    
    
    
</div>


@endsection
@section('js')
<script type="text/javascript">
$( "#enviar" ).click(function() {
    event.preventDefault();
    //alert('click');
    var data_form = $("#formcarta").serialize();
    var token  = $('#token').val();
    var url = "{!!URL::to('/lista')!!}";
    var tabla = $('#bodytable');
    //alert(ruta);
        $.ajax({
        jeaders: {"X-CSRF-TOKEN": token},
        method: "POST",
        url: url,
        data: data_form,
        dataType: "json",
                success: function(result) {
                    //$("#myInfo").remove();
                    //alert("Data found");
                    //alert(result);
                    tabla.html("");
                    $(result).each(function( index, value ) {
                        tabla.append("<tr><td>"+value.cantidad+"</td><td>"+value.nombre+"</td><td>"+value.tipocarta+"</td><td>"+value.id+"</td></tr>");
                        console.log( value.id + value.nombre );
                    });
                    $('#formcarta').trigger("reset");
                },
                error: function(result) {
                    alert("Data not found");
                }
      });
}); 

$( "#NOMBRE" ).keyup(function() {
             
            var selectcbo = $("#ID_CARTA");
            var nombrecarta  = $("#NOMBRE" ).val();
            var route = "{!!URL::to('/getjugadoresbydci')!!}";
            var token  = $("input[name*='_token']").val();
            
           if(parseInt(nombrecarta.length) > 3  ){
               console.clear();
               console.log('BUSCAR');
            selectcbo.html("");
            //selectjgd.append("<option value=''>SELECCIONE UN JUGADOR</option>");
            $.post( route, { nombrecarta: dci , _token : token })
            .done(function( data ) {
                $(data).each(function( index, value ) {
                    selectcbo.append("<option value='"+value.id+"'> "+value.nombre+"</option>");
                    console.log( value.id + value.nombre );
                });
            });
           }
});



</script>
@endsection
