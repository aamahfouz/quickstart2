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
	<td class="table-text"> {{$task->name}} </td>
	<td>
		<form action="/tasks/{{$task->id}}" method="POST">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<button>Delete Task</button>
		</form>
	</td>
</tr>
<br>
@endforeach

@endsection
