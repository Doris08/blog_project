<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

        //return request()->all();

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users,username', // Tambieén se puede así ['required', 'min:8', 'max:255', Rule::unique('users', 'username')->ignore()]
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:20' // Tambien se puede así ['required', 'min:8', 'max:10']
        ]);

        User::create($attributes);

        // Una forma de hacerlo mandando la sesion por separado session()->flash('success', 'Your account has been created.');

        return redirect('/')->with('success', 'Your account has been created.'); // Forma pasando el flash junto con la redirección con metodo with
    }
}


