<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
// use PhpParser\Node\Expr\New_;

class ContactController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $contacts = Contact::all();

        return view('backend.contact.index', compact('contacts'));
    }

    

    public function contactDestroy($id)
    {

        $educations = Contact::find($id);
        $educations->delete();
        return back();
    }
}
