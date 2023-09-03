<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller,
    App\Models\User,
    Illuminate\Http\Request,
    Illuminate\Support\Facades\Auth;

class RegisterController extends Controller{
    //

    public function createUser(){

        return view('auth.register');

    }

    public function storeUser(Request $request){

        $user = User::create([
            'name'      => $request->name,
            'surname'   => $request->surname,
            'email'     => $request->email,
            'password'  => $request->pwd,
        ]);

        Auth::login($user);

        return redirect()->route('profile');
    }

}
