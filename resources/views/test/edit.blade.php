@extends('layout')


@section('title', 'Welcome to my update')

@section('content')
        <div class="row">
            <div class="col-md-12">
                    <form action="{{ route('test.todo.save', ['id'=>$todo->id]) }}" method="POST">
                        <input type="text" name="todo" class="form-control" value="{{ $todo->todo }}" />
                        <input type="hidden" name="id" value="{{ $todo->id }}" />
                    </form>
            </div>
        </div>
@endsection
