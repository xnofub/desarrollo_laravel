<div class="container">
    <div class="row">
        <div class="col-lg-6 ">
            {!! Form::label('TITULO', 'Titulo', array('class' => 'col-lg-3')) !!}
            <div class="col-lg-9">
                {!! Form::text('TITULO',isset($mazo->MAZ_NOMBRE) ? $mazo->MAZ_NOMBRE : '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-lg-6 ">
            {!! Form::label('TPP_ID', 'Tipo Articulo', array('class' => 'col-lg-3')) !!}
            <div class="col-lg-9">
                {!! Form::select('TPP_ID', $tipopost, isset($mazo->FTO_ID) ? $mazo->FTO_ID : '', array('class' => 'form-control col-lg-6')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
                    <textarea  name="editor1" id="editor1" rows="10" cols="80" class="ckeditor">
                                
                    </textarea>
        </div>
    </div>
</div>