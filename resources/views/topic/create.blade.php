<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
   
<h1>Crear libro</h1>

<form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Fecha de publicacion:
    <br>
    <input type="date" name="date _of_publication">
</label>
<br>
<br>
<button type="submit">Añadir libro</button>
</form>
</body>
</html>