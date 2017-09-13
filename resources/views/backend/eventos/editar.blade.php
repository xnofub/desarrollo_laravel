@extends('layouts.master')
@section('title', 'Eventos')
@section('content')

@include('layouts.error')

{!! Form::model($evento, array('route' => array('eventos.update', $evento->EVN_ID), 'method'=>'PUT', 'class' => 'form-horizontal editar', 'role'=>'form')) !!}
<div class="modal-header">
    <h4 class="modal-title titulo_formulario" id="">EDITAR EVENTO</h4>
</div>
<div class="modal-body">    
    @include('backend.eventos.form.evento')
</div>
<div class="modal-footer">
    
    <button type="submit" class="btn btn-primary btn_ok">Enviar</button>
</div>
{!! Form::close() !!}

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $.fn.datepicker.defaults.format = "dd/mm/yyyy";
        $('.datepicker').datepicker({
        });
    });
</script>
@endsection