<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
   
<h1>Crear autor</h1>

<form action="{{route('author.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Biografia:
    <br>
    <input type="text" name="biography">
</label>
<br>
<br>
<button type="submit">Crear</button>
</form>
</body>
</html>