<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){

        $authors = Author::orderBy('id', 'desc')->get();
        return view('author.listar', compact('authors'));
        
    }

    public function create(){
        return view('author.create');
    }

   

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|min:5|max:30|trim',
            'biography' => 'required|string|min:20|max:500|trim',
        ]);
        
        $author= new Author();
        $author->name=$request->name;
        $author->biography=$request->biography;
        $author->save();
        return $author;
    }

    public function show(Author $author) {

        return view('author.show', compact('author'));
    }

    public function edit (Author $author){

        return view('author.edit',compact('author'));

    }

    public function update(Request $request,Author $author ){

        $author->name = $request->name;
        $author->biography = $request->biography;
        $author->save();
        return redirect()->route('author.index');

    }

    public function destroy(Author $author) {
        $author->delete();
        return redirect()->route('author.index');
    }
}
