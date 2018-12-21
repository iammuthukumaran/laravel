@extends('projects/layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>create projects</h1>
<form method="POST" action="/projects">
	{{csrf_field()}}
	<div class="form-group">
		<input type="text" class="form-control {{$errors->has('title') ?  'alert alert-danger' : ''}}" value="{{ old('title') }}" name="title" placeholder="title" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control {{$errors->has('discription') ?  'alert alert-danger' : ''}}" value="{{ old('discription') }}" name="discription" placeholder="description" >
	</div>
	<div>
		<button class="btn btn-primary" type="submit">submit</button>
	</div>
</form>
@if ($errors->any())
	<div class="alert alert-danger">
		
		<ul>
			 @foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
		
	</div>
	@endif

</body>

</html>
@endsection