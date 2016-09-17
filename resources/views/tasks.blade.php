@extends('layouts.app')
@section('content')

@include('common.error')

<form action="{{ url('tasks')}}" method="POST">
	{{ csrf_field() }}
	<label>Task</label>
	<input type="text" name="name">
	<button type="submit">Add Task</button>
</form>

@foreach ($allTasks as $task)
<br>
<tr>
	<td> {{$task->name}} </td>
</tr>
<br>
@endforeach

@endsection