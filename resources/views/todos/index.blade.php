@extends('layout')

@section('title', 'Todos')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
                <form method="post" action="/todos/create">
                    {{ csrf_field() }}
                    <input type="text" class="form-control input-lg" 
                    name="todo"
                    placeholder="Create a new Todo" />
                </form>
        </div>
    </div>
    <hr/>
    @foreach ($todos as $todo )
        {{  $todo->todo }} 
        <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-sm btn-danger">x</a>
        &nbsp;&nbsp;
        <a href="{{ route('todo.update', ['id'=>$todo->id]) }}" class="btn btn-sm btn-info">Update</a>
        <hr/>
    @endforeach

@endsection