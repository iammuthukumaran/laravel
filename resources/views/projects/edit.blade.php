@extends('\projects\layout')
@section('content')
<h1>edit project</h1>
 <form method="POST" action="/projects/{{$project->id}}">
 	{{method_field('PATCH')}}
 	{{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email:</label> 
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="title" value="{{ $project->title }}">
    </div>
    <div class="form-group">
      <label for="pwd">discription:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="discription" value="{{ $project->discription }}">
    </div>
    
    <button type="submit" class="btn btn-primary">update</button>
  </form>
  <form method="POST" action="/projects/{{$project->id}}">
    @method('DELETE');
    @csrf
    <button style="margin-top: 20px;" type="submit" class="btn btn-primary">delete</button>

  </form>

@endsection 