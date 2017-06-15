@extends('layouts.master')
@section('title', 'Articulo')
@section('content')

{!! Form::open(['route' => 'post.store', 'method' => 'POST', 'class' => 'form-horizontal crear','role'=>'form']) !!}
<div class="modal-header">
    <h4 class="modal-title titulo_formulario" id="">AGREGAR POST</h4>
</div>
<div class="modal-body">    
    @include('backend.post.form.post')
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary btn_ok">Enviar</button>
</div>
{!! Form::close() !!}


@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        
    });
</script>
@endsection
