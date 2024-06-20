<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   

    <h1>Listado de Estanterías</h1>
    <ul>
        @foreach($shelves as $shelve)
            <li>{{ $shelve->id }} - {{ $shelve->name }} - Tema ID: {{ $shelve->topic_id }}</li>
        @endforeach
</body>
</html>