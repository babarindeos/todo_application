@extends('layout')

@section('title','Welcome')

@section('content')
        <a href='{{ route('todos') }}'><h1>Visit my Todos</h1></a>

        <br/><br/>
        <a href='{{ route('test_index') }}'><h1>Test App</h1></a>

@endsection