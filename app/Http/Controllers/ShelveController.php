<?php

namespace App\Http\Controllers;

use App\Models\Shelve;
use Illuminate\Http\Request;

class ShelveController extends Controller
{
    public function index(){

        $shelves = Shelve::orderBy('id', 'desc')->get();
        return view('shelve.listar', compact('shelves'));
        
    }

    public function create(){
        return view('shelve.create');
    }

   

    public function store(Request $request){
        
        $request->validate([

            'library_id' => 'required|exists:libraries,id',
            'topic_id' => 'required|exists:topics,id',
            'code' => 'required|integer|min:2|max:10|trim',
        ]);

        $shelve= new Shelve(); 
        $shelve->library_id=$request->library_id;
        $shelve->topic_id=$request->topic_id;
        $shelve->code=$request->code;
        $shelve->save();
        return $shelve;
    }

    public function show(Shelve $shelve) {
        $shelves = $this->consulta(); 
        return view('shelve.show', compact('shelve'), ['shelves' => $shelves] );
    }

    public function edit (Shelve $shelve){

        return view('shelve.edit',compact('shelve'));

    }

    public function update(Request $request,Shelve $shelve){

        $shelve= new Shelve();
        $shelve->library_id=$request->library_id;
        $shelve->topic_id=$request->topic_id;
        $shelve->code=$request->code;
        $shelve->save();
        return redirect()->route('shelve.index');

    }

    public function destroy(Shelve $shelve) {
        $shelve->delete();
        return redirect()->route('shelve.index');
    }

    public function consulta(){
        return Shelve::orderBy('topic_id')->get();
    }
}
