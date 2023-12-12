<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:100|confirmed'
        ]);

       User::create($validatedData);

    //    $validatedData['password'] => Hash::make($validatedData['password']); // no need, laravel already auto encrypt password in create()
    //    $request->session()->flash('success', 'Registration successful, please login!');
        
       return redirect('/login')->with('success', 'Registration succesful, please login!');
    }
}
