<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(){

        $topics = Topic::orderBy('id', 'desc')->get();
        return view('topic.listar', compact('topics'));
        
    }

    public function create(){
        return view('topic.create');
    }

   

    public function store(Request $request){
        
        $request->validate([

            'name' => 'required|integer|min:5|max:30|trim',
            'color_code' => 'required|integer|max:10|trim',
        ]);

        $topic= new Topic(); 
        $topic->name=$request->name;
        $topic->color_code=$request->color_code;
        $topic->save();
        return $topic;
    }

    public function show(Topic $topic) {

        return view('topic.show', compact('topic'));
    }

    public function edit (Topic $topic){

        return view('topic.edit',compact('topic'));

    }

    public function update(Request $request,Topic $topic){

        $topic= new Topic();
        $topic->name=$request->name;
        $topic->color_code=$request->color_code;
        $topic->save();
        return redirect()->route('topic.index');

    }

    public function destroy(Topic $topic) {
        $topic->delete();
        return redirect()->route('topic.index');
    }
}
