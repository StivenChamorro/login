<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
   
<h1>Crear libro</h1>

<form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name" required minlength="5" maxlength="45">
    </label>
    <br>
    <label>
        Fecha de publicación:
        <br>
        <input type="date" name="date_of_publication" required>
    </label>
    <br>
    <label>
        Autor:
        <br>
        <select name="author_id" required>
            <option value="" disabled selected>Seleccione un autor</option>
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <button type="submit">Añadir libro</button>
</form>

</body>
</html>
