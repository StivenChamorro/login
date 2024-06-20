<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
 
    <h1>Autores disponibles</h1>

    <table>

        @foreach ($authors as $author)
        {{-- creo una fila --}}
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->biography}}</td>
            <td><a href="{{route('author.show',$author->id)}}">Mostrar más</a></td>
            <td><a href="{{route('author.edit',$author->id)}}">Editar</a></td>
            <td>
                <form action="{{route('author.destroy',$author->id)}}" method="POST">
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