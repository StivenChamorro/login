<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        //return view('book.listar', compact('books'));
        $books = Book::orderBy('id', 'desc')->get();
        return view('book.listar', compact('books'));
        
    }

    public function create(){

        $authors = Author::all();
        return view('book.create', compact('authors'));

    }

   

    public function store(Request $request)
    {
       
         // Crear y guardar el libro
        $book = new Book();
        $book->name=$request->name;
        $book->date_of_publication=$request->date_of_publication;
        $book->author_id=$request->author_id;
        $book->save();

       
    
        return $book;
    }
    

    public function show(Book $book) {

        return view('book.show', compact('book'));
    }

    public function edit (Book $book){

        return view('book.edit',compact('book'));

    }

    public function update(Request $request,Book $book){

        $book->name=$request->name;
        $book->date_of_publication=$request->date_of_publication;
        $book->author_id=$request->author_id;
        $book->save();
        return redirect()->route('book.index');

    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('book.index');
    }
}
