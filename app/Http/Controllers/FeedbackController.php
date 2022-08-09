<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbac = Feedback::all();
        return view('admin.feedback', ['feedbac' => $feedbac]);
    }
    public function store(Request $request)
    {
       
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'mess' => 'required',
                'sefeedback'=>'required|in:report,suggestion,compliment,other',
                'rating'=>'required|in:1,2,3,4,5'
            ]
        );
       
        $feedbac = [
            "name" => $request->name,
            "email" => $request->email,
            "feedbackin" => $request->sefeedback,
            "rating" => $request->rating,
            "query" => $request->mess,
            "user_id" => Auth::user()->id,

        ];
        Feedback::create($feedbac);
        return redirect('/dashboard');
    }
}
