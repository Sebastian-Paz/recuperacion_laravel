<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('cliente.update', $cliente)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            telefono:
        <br>
        <input name="telefono" type="integer" value="{{old('telefono',$cliente->telefono) }}">
        <br>
        </label>

        <br>
        <label>
            num-social:
        <br>
        <input name="num_social" type="integer" value="{{old('num_social',$cliente->num_social )}}">
        <br>
        </label>

        <br>
        <label>
            codigo:
        <br>
        <input name="codigo" type="integer" value="{{old('codigo',$cliente->codigo )}}">
        <br>
        </label>
        
        <br>
        <label>
            domicilio:
        <br>
        <input name="domicilio" type="string" value="{{old('domicilio',$cliente->domicilio )}}">
        <br>
        </label>
        
       

        <button  type="submit">registro hijo</button>
       
    </form>
   
</body>
</html>