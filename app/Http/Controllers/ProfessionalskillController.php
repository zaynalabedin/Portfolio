<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class ProfessionalskillController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createSkill()
    {

        return view('backend.resume.professionalSkills.create');
    }

    public function skillStore(Request $request)
    {
        $request->validate([
            'skills_Name' => 'required',


        ]);
        $skills = New Skill();
        $skills->skills_Name = $request->input('skills_Name');

        $skills->save();

        return redirect('resumes')->with('skills',"This is Success Professional Skills");

    }

    // public function SkillEdit($id)
    // {
    //     $educations = Skill::where('id', $id)->first();

    //     return view('backend.resume.education.edit', compact('educations'));

    // }

    // public function skillUpdate(Request $request, $id)
    // {

    //     $skills = Skill::find($id);
    //     $skills->skills_Name = $request->input('skills_Name');

    //     $skills->save();

    //     return redirect('resumes')->with('skills',"This is Success Professional Skills");

    // }

    public function SkillDestroy($id)
    {

        $educations = Skill::find($id);
        $educations->delete();
        return back();
    }

}
