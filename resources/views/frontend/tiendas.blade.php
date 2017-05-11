
<table>
    @foreach($tiendas as $t)
    <tr>
        <td>{{$t->TND_NOMBRE}} </td>
        <td>{{$t->TND_PROPIETARIO}} </td>
        <td>{{$t->TND_DIRECCIÓN}} </td>
        <td> Editar </td>
        <td> Borrar </td>
    </tr>
    @endforeach
</table>
<nav class="paginacion">
    {!! $tiendas->render() !!}
</nav>