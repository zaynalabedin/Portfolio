<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $projects= Project::all();
        return view('backend.projects.index', compact(['projects']));
        // dd($data);
    }
    public function createProject(){
        return view('backend.projects.create');
    }

    public function projectStore(Request $request){
        $request->validate([
            'project_Name'=> 'required|unique:projects',
            'description'=>'required',


        ]);
        $projects = New Project();
        $projects->project_Name = $request->input('project_Name');
        $projects->description = $request->input('description');

        if($request->hasFile('image')){
            $images= $request->file('image');
            $destinationPath= 'public/image';
            $projectsImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $projectsImage);
            $projects['image'] = $projectsImage;
        }

        $projects->save();
        // return back();
        return redirect('projects');
    }
    public function projectEdit($id){
        $project = Project::where('id', $id)->first();
        // dd($project);
        return view('backend.projects.edit', compact('project'));

    }

    public function projectUpdate(Request $request, $id){

        $project= Project::find($id);

        $project->project_Name= $request->input('project_Name');
        $project->description= $request->input('description');
        // dd($project);
        if($request->hasFile('image')){
            $destinationPath = 'public/image' . $project->image;
            if(file::exists($destinationPath)){
                file::delete($destinationPath);
            }
            $image = $request->file('image');
            $destinationPath = 'public/image';
            $projectImage = date('YmdHis'). "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $projectImage);
            $project['image'] = $projectImage;
        }
        $project->save();
        return redirect('projects');
    }
    public function destroy($id){
        $project = Project::find($id);

        $project->delete();
        return back();

    }
}
