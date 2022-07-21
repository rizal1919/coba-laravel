<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
           'title' => 'Register',
           'active' => 'Login'
        ]);
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:255|alpha',
            // wajib ada | maksimal berisi 255 karakter | hanya string yang dapat diinputkan

            'username' => ['required','min:3','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            // email:dns berguna untuk mengatasi domain yang salah. yang benar adalah @example.com

            'password' => ['required','min:5']
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        // password nya di enkripsi

        $validateData['password'] = Hash::make($validateData['password']);

        \App\Models\User::create($validateData);

        return redirect('/login')->with('success', 'Registration Successfully!');
    }
}
