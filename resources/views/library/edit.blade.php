<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('author.update', $author)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Nombre del autor:
        <br>
        <input name="name" type="text" value="{{old('Name',$author->name) }}">
        <br>
        </label>
        <br>
        <label>
        Biografia:
        <br>
        <input name="biography" type="text" value="{{old('biography',$author->biography)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar informacion</button>
       
    </form>
   
</body>
</html>