<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{'/'}}" aria-current="page">My library <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Biblioteca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estanteria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('author.index')}}">Autor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('book.index')}}">libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Copia</a>
                </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container mt-5">
            <h1>Buscar en la biblioteca</h1>
            <form action="{{ route('search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="query" placeholder="Buscar bibliotecas, libros o autores" aria-label="Buscar">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </form>
    
            @if(isset($results))
                <h2>Resultados de la búsqueda:</h2>
                <ul>
                    @foreach($results as $result)
                        <li>{{ $result->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>






        <h1>¿Que deseas crear?</h1>
        <ol class="contador">
            <li><a href="#">Biblioteca</a></li>
            <li><a href="#">Tema</a></li>
            <li><a href="#">Estanteria</a></li>
            <li><a href="{{route('create.autor')}}">Autor</a></li>
            <li><a href="{{route('book.create')}}">Libro</a></li>
            <li><a href="#">Copia</a></li>
        </ol>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
