<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;


class ProjectsController extends Controller
{
    //
    public function index()
    {
    	$projects=Project::all();
    	//return $projects;


    	return view('projects.index',compact('projects'));
    }
    public function show(project $project)
    {
    	
    	return view('projects.show',compact('project'));
    }

      public function create()
    {    

    	return view('projects.create');
    }

	public function store()
	{
		/*Project::create(request()->all());
		return 'done*/
request()->validate([
	'title'=>['required','min:3','max:10'],
	'discription'=>['required','min:5','max:255']
]);

				Project::create(request(['title','discription']));
			return redirect('/projects');

		/*$project = new project();
		$project->title = request('title');
		$project->discription = request('discription');		
		$project->save();
		return redirect('/projects');*/
	}


	public function edit(project $project)

	{
		//return $id;
		//$project = project::findOrFail($id);
		return view('projects.edit', compact('project'));
	}

	public function update(project $project)
	{
 		// dd(request()->all());

 		$project->update(request(['title','discription']));
		return redirect('/projects');

		/*$project = project::findOrFail($id);
		$project->title =request('title');
		$project->discription =request('discription');
 		$project->save();
 		return redirect('/projects');*/
 		
 	}
 	public function destroy(project $project)
 	{
 		$project->delete();
 		return redirect('/projects');
 		/*$project = project::findOrFail($id);
		$project->title =request('title');
		$project->discription =request('discription');
 		$project->delete();
 		return redirect('/projects');*/
 	}

}
