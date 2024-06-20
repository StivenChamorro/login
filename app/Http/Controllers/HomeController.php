<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Book;
use App\Models\Author;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


   
public function search(Request $request)
{
    $query = $request->input('query');

    // Buscar bibliotecas, libros y autores que no fueron registrados por el usuario actual
    $libraries = Library::where('name', 'LIKE', "%$query%")
        ->where('user_id', '!=', auth()->id())
        ->get();

    $books = Book::where('name', 'LIKE', "%$query%")
        ->where('user_id', '!=', auth()->id())
        ->get();

    $authors = Author::where('name', 'LIKE', "%$query%")
        ->where('user_id', '!=', auth()->id())
        ->get();

    // Combinar todos los resultados en una sola colección
    $results = $libraries->merge($books)->merge($authors);

    return view('home', ['results' => $results]);
}

}
