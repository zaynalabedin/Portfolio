<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $profiles = Profile::all();
        return view('backend.profile.index', compact(['profiles']));
    }
    public function createProfile(){
        return view('backend.profile.create');
    }

    public function profileStore(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);

        $profiles = New Profile();
        $profiles->name = $request->input('name');
        if($request->hasFile('image')){
            $images= $request->file('image');
            $destinationPath= 'public/image';
            $profilesImage= date('YmdHis') . '.' . $images->getClientOriginalExtension();
            $images->move($destinationPath,$profilesImage);
            $profiles['image'] = $profilesImage;
        }
        $profiles->save();
        return redirect('profiles');
    }

    public function profileEdit($id){

        $profile = Profile::Where('id', $id)->first();
        return view('backend.profile.edit', compact('profile'));
    }
    public function profileUpdate(Request $request, $id){
        $profile = Profile::find($id);
        $profile->name = $request->input('name');
        if($request->hasFile('image')){
            $images= $request->file('image');
            $destinationPath = 'public/image';
            $profilesImage = date('YmdHis') . '.' . $images->getClientOriginalExtension();
            $images->move($destinationPath,$profilesImage);
            $profile['image'] = $profilesImage;
        }
        $profile->save();

        return redirect('profiles');

    }
}
