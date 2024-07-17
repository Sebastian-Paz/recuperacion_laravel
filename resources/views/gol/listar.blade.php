<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trabajos Publicados</title>
</head>
<body>
 
    <h1>Listado de pagos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>numero</th>
            <th>concepto</th>
            <th>fecha_pago</th>
            <th>cantidad</th>
           
        </tr>

        @foreach ($pago as $pago)
       
        <tr>
            <td>{{$pago->id}}</td>
            <td>{{$pago->numero}}</td>
            <td>{{$pago->concepto}}</td>
            <td>{{$pago->fecha_pago}}</td>
            <td>{{$pago->cantidad}}</td>
           
            <td>
                <a href="{{ route('pago.show', $pago->id) }}">Mostrar</a>
                <td><a href="{{route('pago.edit',$pago->id)}}">Editar</a></td>
                <form action="{{ route('pago.destroy', $pago->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>