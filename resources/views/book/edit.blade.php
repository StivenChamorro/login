<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('book.update', $book)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Nombre del libro:
        <br>
        <input name="name" type="text" value="{{old('name',$book->name) }}">
        <br>
        </label>
        <br>
        <label>
        Fecha de publicacion:
        <br>
        <input name="date_of_publication" type="date" value="{{old('date_of_publication',$book->date_of_publication)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar informacion</button>
       
    </form>
   
</body>
</html>