<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Language;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $experiences = Experience::all();
        $educations = Education::all();
        $skills = Skill::all();
        $skillLanguages = Language::all();
        return view('backend.resume.index', compact(['experiences','educations', 'skills','skillLanguages']));
    }
    public function createExperience()
    {

        return view('backend.resume.experience.create');
    }
    public function experienceStore(Request $request)
    {
        $request->validate([
            'duration' => 'required',
            'position' => 'required',
            'companyName' => 'required',
            'address' => 'required',
            'description' => 'required',

        ]);
        $experience = new Experience();

        $experience->duration = $request->input('duration');
        $experience->position = $request->input('position');
        $experience->companyName = $request->input('companyName');
        $experience->address = $request->input('address');
        $experience->description = $request->input('description');

        $experience->save();

        return redirect('resumes')->with('experience',"This is Success Message");;
        // return view('backend.resume.index');
    }
    public function experienceEdit($id)
    {
        $experiences = Experience::where('id', $id)->first();

        return view('backend.resume.experience.edit', compact('experiences'));

    }
    public function experienceUpdate(Request $request, $id)
    {
        $experiences = Experience::find($id);
        $experiences->duration = $request->input('duration');
        $experiences->position = $request->input('position');
        $experiences->companyName = $request->input('companyName');
        $experiences->address = $request->input('address');
        $experiences->description = $request->input('description');

        $experiences->save();

        return redirect('resumes')->with('experience',"This is Update Success");

        // return view('backend.resume.index');
    }
    public function experienceDestroy($id)
    {

        $experience = Experience::find($id);
        $experience->delete();
        return back();
    }
}
