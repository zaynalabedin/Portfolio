<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class SkilllanguageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createSkill_language()
    {

        return view('backend.resume.skillLanguage.create');
    }

    public function skill_languageStore(Request $request)
    {
        $request->validate([
            'skills_languageName' => 'required',


        ]);
        $skillLanguage = New Language();
        $skillLanguage->skills_languageName = $request->input('skills_languageName');

        $skillLanguage->save();

        return redirect('resumes')->with('skillLanguage',"This is Success  Skills Language");

    }

    public function skill_languageDestroy($id)
    {

        $educations = Language::find($id);
        $educations->delete();
        return back();
    }
}
