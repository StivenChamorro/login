<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
 
    <h1>Libros disponibles</h1>

    <table>

        @foreach ($books as $book)
        {{-- creo una fila --}}
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->date_of_publication}}</td>
            <td>{{$book->author_id}}</td>
            <td><a href="{{route('book.show',$book->id)}}">Mostrar más</a></td>
            <td><a href="{{route('book.edit',$book->id)}}">Editar</a></td>
            <td>
                <form action="{{route('book.destroy',$book->id)}}" method="POST">
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