<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function create(){
        return view('session.create');
    }

    public function store(){
        //vadite the request

        $attributes = request()->validate([
           'email' => 'required|email',
           'password'=>'required'
        ]);

        //attemp to authenticate and login the user
        //based on user creadentials
        if(auth()->attempt($attributes)){
            //redirect with flash message
            return redirect('/')->with('success', 'Welcome Back!');
        }

        return back()
            ->withInput()
            ->withErrors(['email'=>'Your provided creadentials could not be verified!']);



    }


    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
