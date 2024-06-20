<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function index(){

        $copies = Copy::orderBy('id', 'desc')->get();
        return view('copy.listar', compact('copies'));
        
    }

    public function create(){
        return view('copy.create');
    }

   

    public function store(Request $request){
        
        $request->validate([
            'copy_number' => 'required|integer|min:1|trim',
            'book_id' => 'required|exists:books,id',
            'topic_id' => 'required|exists:topics,id',
            'library_id' => 'required|exists:libraries,id',
        ]);

        $copy= new Copy();
        $copy->copy_number=$request->copy_number;
        $copy->book_id=$request->books_id;
        $copy->topic_id=$request->topic_id;
        $copy->library_id=$request->library_id;
        $copy->save();
        return  $copy;
    }

    public function show(Copy $copy) {

        return view('copy.show', compact('copy'));
    }

    public function edit (Copy $copy){

        return view('copy.edit',compact('copy'));

    }

    public function update(Request $request,Copy $copy){

        $copy->copy_number=$request->copy_number;
        $copy->book_id=$request->books_id;
        $copy->topic_id=$request->topic_id;
        $copy->library_id=$request->library_id;
        $copy->save();
        return redirect()->route('copy.index');

    }

    public function destroy(Copy $copy) {
        $copy->delete();
        return redirect()->route('copy.index');
    }

    public function consulta(){
        $books = Copy::where('date_of_publication', '>', '2023-01-01')
             ->orderBy('name')
             ->get();

             return $books;
    }
}
