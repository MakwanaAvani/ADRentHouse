<?php

namespace App\Http\Controllers;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactusController extends Controller
{
    public function index()
    {
        $contactus = ContactUs::all();
        // dd($property);
        //return view('admin.adminrentyourproperty')->with('property', $property);
        return view('admin.contactus',['contactus'=>$contactus]);
       
        //return "$property";
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message'=>'required',
            ]
        );
       
        $input = $request->all();
        $contactus = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
            "user_id" => Auth::user()->id,
        ];
        Contactus::create($contactus);
        return redirect("/dashboard");
    }
}
