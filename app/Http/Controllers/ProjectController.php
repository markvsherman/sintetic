<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $project = New Project();
        $projects = $project->projects();
        return view('projects', compact('projects'));
    }
    public function add()
    {
        return view('project_add');
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'code' => 'required',
            'name' => 'required'
        ]);

        $project = new Project();
        $project->code = $request->code;
        $project->name = $request->name;
        $project->save();
        return redirect('/projects');
    }
    public function edit(Project $project)
    {
        return view('project_edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        if(isset($_POST['delete'])) {
            $project->delete();
            return redirect('/projects');
        }
        else
        {
            $this->validate($request, [
                'code' => 'required',
                'name' => 'required'
            ]);

            $project->code = $request->code;
            $project->name = $request->name;
            $project->save();
            return redirect('/projects');
        }
    }
}
