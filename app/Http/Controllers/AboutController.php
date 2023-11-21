<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $abouts= About:: all();
        return view('backend.about.index', compact(['abouts']));
    }

    public function createAbout(){
        return view('backend.about.create');
    }
    public function aboutStore(Request $request){
        $request->validate([
            'about_name'=>'required',
            
        ]);

        $abouts = New About();
        $abouts->about_name = $request->input('about_name');
        
        $abouts->save();
        return redirect('abouts');
    }
    public function aboutEdit($id){

        $about = About::Where('id', $id)->first();
        
        return view('backend.about.edit', compact('about'));
    }
    public function aboutUpdate(Request $request, $id){
        $about = About::find($id);
        $about->about_name = $request->input('about_name');
        
        $about->save();

        return redirect('abouts');

    }

}
