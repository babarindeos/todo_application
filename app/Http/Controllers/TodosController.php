<?php

namespace App\Http\Controllers;

use App\Todo;

use App\Http\Requests;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        //dd($todos);

        return view('todos.index')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        //dd($request->except('todo'));
        $todo = new Todo();

        $todo->todo = $request->todo;
        $todo->save();

        return back();
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('todos.update')->with('todo', $todo);
    }
}
