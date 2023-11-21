<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function index()
    // {
    //     $educations = Education::all();
    //     return view('backend.resume.index', compact('educations'));
    // }
    public function createEducation()
    {

        return view('backend.resume.education.create');
    }
    public function educationStore(Request $request)
    {
        $request->validate([
            'duration' => 'required',
            'instituteName' => 'required',
            'program' => 'required',
            'address' => 'required',
            'group' => 'required',
            'description' => 'required',

        ]);
        $educations = New Education();
        $educations->duration = $request->input('duration');
        $educations->instituteName = $request->input('instituteName');
        $educations->program = $request->input('program');
        $educations->address = $request->input('address');
        $educations->group = $request->input('group');
        $educations->description = $request->input('description');

        $educations->save();
// return back();
        return redirect('resumes')->with('education',"This is Success Education");
        // return view('backend.resume.index');
    }
    public function educationEdit($id)
    {
        $educations = Education::where('id', $id)->first();

        return view('backend.resume.education.edit', compact('educations'));

    }
    public function educationUpdate(Request $request, $id)
    {
        $educations = Education::find($id);
        $educations->duration = $request->input('duration');
        $educations->instituteName = $request->input('instituteName');
        $educations->program = $request->input('program');
        $educations->address = $request->input('address');
        $educations->group = $request->input('group');
        $educations->description = $request->input('description');

        $educations->save();

        return redirect('resumes')->with('education',"This Education is Update Success");

        // return view('backend.resume.index');
    }
    public function educationDestroy($id)
    {

        $educations = Education::find($id);
        $educations->delete();
        return back();
    }
}
