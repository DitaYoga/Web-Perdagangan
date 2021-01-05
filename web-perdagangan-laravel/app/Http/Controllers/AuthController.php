<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Model\User;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect('/dashboard');
        }
        return view('auths.login');
    }

    public function login_process(Request $request)
    {
        $request->request->add(['level' => 'user']);
        if(Auth::attempt($request->only('name','password','level'))){
            session()->put('login','login');
            if (session('lastSeenProduct') != null) {
                return redirect('/product_details/'.session('lastSeenProduct'));
            }else{
                return redirect('/');    
            }
            
        } elseif (Auth::attempt($request->only('name','password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function register()
    {
        if (Auth::user()) {
            return redirect('/');
        }
        return view('auths.register');
    }

    public function register_process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'level' => 'user',
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        session()->forget('login');
        session()->forget('lastSeenProduct');
        Auth::logout();
        return redirect('/');
    }
}