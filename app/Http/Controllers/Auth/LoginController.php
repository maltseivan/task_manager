<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller,
    Illuminate\Http\Request,
    Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function loginUser(){

        return view('auth.login');

    }

    public function loginSubmit(Request $request){

        $request->validate([
            'email'     => ['required', 'string', 'email'],
            'password'  => ['required', 'string']
        ]);

        if (Auth::attempt($request->only('email', 'password'))){
           return redirect()->intended('profile');
        } else {
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'Пользователь с таким email не найден!'
                ]);
        }

    }

    public function logoutUser(Request $request){

        Auth::logout();
        return redirect()->route('login-user');

    }
}
