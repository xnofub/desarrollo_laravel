{!! Form::model($jugador, array('route' => array('jugadores.update', $jugador->JGD_ID), 'method'=>'PUT', 'class' => 'form-horizontal editar', 'role'=>'form')) !!}
<div class="modal-header">
    <h4 class="modal-title titulo_formulario" id="">EDITAR MAZO</h4>
</div>
<div class="modal-body">    
    @include('backend.eventosmazos.form.resultado')
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary btn_ok">Actualizar</button>
</div>
{!! Form::close() !!}
