@extends('layout')


@section('title', 'Test')

@section('content')

      <div class="row mt-4">
         <div class="col-md-6 offset-md-3">
               <form action="test/create/todo" method="post">
                     {{ csrf_field() }}
                     <input type="text" class="form-control input-lg" name="todo" placeholder="Create a todo">
               </form>
         </div>
      </div>
     <hr>
     <div class="row">
            
            @foreach ($todos as $todo )
                  <div class="col-md-12"> 
                        {{ $todo->todo }} 
                              <a href="{{ route("test.todo.delete", ['id'=>$todo->id]) }}" class="btn btn-danger">X</a>
                              <a href="{{ route("test.todo.update", ['id'=>$todo->id]) }}" class="btn btn-info btn-xs">Update</a>
                              @if ($todo->completed)
                                    <span class="text-success font-weight-bold">Completed</span> &nbsp;&nbsp;
                                    <a href="{{ route("test.todo.mark_uncompleted", ['id'=>$todo->id]) }}" class="btn btn-sm btn-danger">Mark as Uncompleted</a>

                              @else
                                    <a href="{{ route("test.todo.mark_completed", ['id'=>$todo->id]) }}" class="btn btn-primary btn-sm">Mark as Completed</a>

                                    
                              @endif
                              <hr/>
                  </div>
                  
            @endforeach
      </div>

@endsection