<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'username' => 'required|unique:users|min:4',
            'password' => 'required|min:4',
            'address' => 'required',
            'phone_number' => 'required|numeric|min:11'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/login')->with('success', 'Register Successful, go login now');
    }
}
