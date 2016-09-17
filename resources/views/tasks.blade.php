@extends('layouts.app')
@section('content')

<form action="{{ url('tasks')}}" method="POST">
	{{ csrf_field() }}
	<label>Task</label>
	<input type="text" name="name">
	<button type="submit">Add Task</button>
</form>

@endsection