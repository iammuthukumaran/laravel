@extends('projects/layout')
@section('content')
<h1 class="title">{{ $project->title }}</h1>
<div class="description">{{ $project->discription }}</div>

<p>
	<a href="/projects/{{$project->id}}/edit/">edit</a></p>

	@if($project->tasks->count())
	<div>
	
		@foreach($project->tasks as $task)
		
			<li>{{$task->discription}}</li>

		
		@endforeach
	</div>
	@endif

@endsection