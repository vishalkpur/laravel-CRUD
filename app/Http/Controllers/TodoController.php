<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title'=>'required',
            'description'=>'required',

        ]);
        $todo= new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //return view("home");
        return view("home")->with("alltodos", todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo ,$hey )
    { 
        return view('updatedata')->with('singlerecord',Todo::find($hey));
     /*   $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->description = $request->description ;
        $todo->save();

        return redirect("home"); */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo ,$id)
    {
       // return view('updatedata')->with('singlerecord',Todo::find($hey));
       $todo = Todo::find($id);
       $todo->title = $request->input('title');
       $todo->description = $request->description ;
       $todo->save();

       return redirect("home");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo ,$id)
    {
       Todo::where('id',$id)->delete();  //model name ::where('route variable',$variable)->delete();

       

        return redirect('home')->with('success',"deleted successfully");//success - session necesary
    }
}
