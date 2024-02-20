<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('login_page.login', [
            "title" => "Login",
            
        ]);
    }

    public function register() {
        return view('login_page.register', [
            "title" => "Register",
            
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "email" => "required|email:dns",
            "name" => "required|max:100|unique:users",
            "password" => "required|min:4",
            
        ]);

        $validateData["password"] = Hash::make($validateData["password"]);

       User::create($validateData);
       $request -> session()->flash("success", "Register Successfully");

       return redirect('/login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginError', 'Login Gagal');

    }

    public function logout( ){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
    }

