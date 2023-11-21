<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function adminView(){
    //     return view('admin.home');
    // }
    public function dashboard(){
        // $data= Project::all();
        // $profile = Profile::all();
        return view('admin.adminDashboard');
    }


}
