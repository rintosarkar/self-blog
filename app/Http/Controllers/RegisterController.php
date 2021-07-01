<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{

    public function create(){
        return view('register.create');
    }

    public function store(){


        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'username' => ['required','max:255','min:5',Rule::unique('users','username')],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => ['required','max:255','min:7'],
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);

        session()->flash('success', 'Your account has been created.');

        return redirect('/');
    }
}
