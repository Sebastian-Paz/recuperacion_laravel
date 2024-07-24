<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> cliente</h1> 
   
   <form action="{{route('cliente.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        telefono:
        <br>
        <input type="integer" name="telefono">
    </label>
    <br><br>

    <label>
        num-social:
        <br>
        <input type="integer" name="num_social">
    </label>
    <br><br>
    
    <label>
        Codigo:
        <br>
        <input type="integer" name="codigo">
    </label>
    <br><br>

    <label>
        domicilio:
        <br>
        <input type="string" name="string">
    </label>
    <br><br>

    <button type="submit">registro cliente:</button>
   

</form>

</body>
</html>