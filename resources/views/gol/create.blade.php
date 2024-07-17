<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> goles </h1> 
   
   <form action="{{route('goles.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        minuto:
        <br>
        <input type="integer" name="minuto">
    </label>
    <br><br>
    <label>
        descanso:
        <br>
        <input type="text" name="desc">
    </label>
    <br><br>

    <button type="submit">guardar goles:</button>
   

</form>

</body>
</html>