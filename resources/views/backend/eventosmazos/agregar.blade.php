{!! Form::open(['route' => 'participantes.store', 'method' => 'POST', 'class' => 'form-horizontal crear','role'=>'form']) !!}
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">AGREGAR RESULTADO</h4>
</div>
<div class="modal-body">   
    @include('backend.eventosmazos.form.resultado')
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary btn_ok">Enviar</button>
</div>
{!! Form::close() !!}
