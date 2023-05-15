<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required|min:4',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
 
            session([
                'user_id' => User::firstWhere('username', $credentials['username'])->only('id')['id']
            ]);

            return redirect()->intended('/');
        }

        return back()->with('failed', 'You put a wrong username or password');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
