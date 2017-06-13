@extends('layouts.master')
@section('title', 'Post')
@section('content')

@include('layouts.flash')
{{link_to_route('post.create', 'Agregar', $parameters = null , $attributes = ['class'=>'btn btn-success'])}}
<div class="row">
     
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $p)
            <tr>
                <td> {{$p->PST_ID}}</td>
                <td> {{$p->PST_TITULO}}</td>
                <td> {{$p->PST_FECHA}}</td>
                <td> {{$p->PST_ESTADO}}</td>
            </tr>
            <?php //echo $p->PST_TEXTO; ?>
             @endforeach 
        </tbody>
    </table>
    
   
    
        
    
   
    
    
    
</div>

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        
    });
</script>
@endsection