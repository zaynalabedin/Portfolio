<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Language;
use App\Models\Profile;
use App\Models\About;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $profiles = Profile::latest()->take(1)->get();
        $abouts = About::all();
        return view('fontend.home', compact(['profiles','abouts']));
    }
    public function project()
    {
        $projects= Project::all();
        return view('fontend.project', compact('projects'));
    }
    public function resume()
    {
        $experiences = Experience::all();
        $educations = Education::all();
        $skills = Skill::all();
        $skillLanguages = Language::all();
        return view('fontend.resume', compact(['experiences','educations', 'skills','skillLanguages']));
    }
    public function contact()
    {
        return view('fontend.contact');
    }


    public function contactStore(Request $request){

        $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:11',
            'message' => 'required',
        ]);

        $contacts = New Contact();
        $contacts->fullName= $request->input('fullName');
        $contacts->email= $request->input('email');
        $contacts->phone= $request->input('phone');
        $contacts->message= $request->message;

        $contacts->save();

        return back()->with('contact', "Your Message Send Successfully");
    }

    public function download(){
        try{
            $resume = storage_path("download/Zaynal-Resume.pdf");
            return response()->download($resume);
        }catch(\Exception $e){
            abort(404);
        }

    }
}
