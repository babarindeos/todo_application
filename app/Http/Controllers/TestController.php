<?php

namespace App\Http\Controllers;

use App\Todo;

use App\Http\Requests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $todo = Todo::all();
        return view('test.index')->with('todos', $todo);
    }

    public function store(Request $request)
    {
        $todo = new Todo();

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('test.edit')->with('todo', $todo);
    }

    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);


        $todo->todo = $request->todo;

        $todo->update();

        return redirect()->route('test_index');
    }

    public function mark_completed($id)
    {
        $todo = Todo::find($id);

        //dd($todo->completed);
        $todo->completed = !($todo->completed);

        $todo->update();

        return redirect()->back();
    }

    public function mark_uncompleted($id)
    {
        $todo = Todo::find($id);

        $todo->completed = !($todo->completed);

        $todo->update();

        return redirect()->back();
    }
}
