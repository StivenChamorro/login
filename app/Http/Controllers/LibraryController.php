<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(){

        $libraries = Library::orderBy('id', 'desc')->get();
        return view('library.listar', compact('libraries'));
        
    }

    public function create(){
        return view('copy.create');
    }

   

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|integer|min:5|max:30|trim',
            'location' => 'required|integer|min:20|max:125|trim',
            'description' => 'nullable|integer|min:20|max:500|trim',
        ]);

        $library= new Library();
        $library->name=$request->name;
        $library->location=$request->location;
        $library->description=$request->description;
        $library->save();
        return $library;
    }

    public function show(Library $library) {

        return view('library.show', compact('library'));
    }

    public function edit (Library $library){

        return view('library.edit',compact('library'));

    }

    public function update(Request $request,Library $library){

        $library= new Library();
        $library->name=$request->name;
        $library->location=$request->location;
        $library->description=$request->description;
        $library->save();
        return redirect()->route('library.index');

    }

    public function destroy(Library $library) {
        $library->delete();
        return redirect()->route('library.index');
    }
}
