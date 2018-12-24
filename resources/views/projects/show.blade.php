@extends('projects/layout')
@section('content')
<h1 class="title">{{ $project->title }}</h1>
<div class="description">{{ $project->discription }}</div>

<p>
	<a href="/projects/{{$project->id}}/edit/">edit</a></p>

	@if($project->tasks->count())
	<div>

		@foreach($project->tasks as $task)
		<div>
			<form method="POST" action="/tasks/{{$task->id}}">
				@method('PATCH')
				@csrf
				<label class="checkbox {{ $task->complete ? 'is-complete' : '' }}" for="completed">
<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->complete ? 'checked' : '' }}>
			{{$task->discription}} </label>

		</form>
		</div>
		@endforeach
	</div>
	
	@endif

@endsection