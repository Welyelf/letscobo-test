<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {

        return view('contact');
    }

    public function store()
    {
        request()->validate([
            'email' => 'required|email', //  ['required','min:3','max:255']
        ]);

//        Mail::raw('It works', function ($message){
//            $message->to(request('email'))
//                ->subject('Hello There');
//        });

        Mail::to(request('email'))->send(new ContactMe('shirts'));
        return redirect('/contact')->with('message','Email Sent!');
    }

    protected function validateEmail(){
        return request()->validate([
            'email' => 'required|email', //  ['required','min:3','max:255']

        ]);


    }


}
