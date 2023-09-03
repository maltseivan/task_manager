<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller,
    App\Models\User,
    Illuminate\Support\Facades\Auth;

class ProfileController extends Controller{
    //

    public function dataUser(){

        $data = User::where('id', Auth::user()->id)->first();

        return view('profile ', ['data' => $data]);

        /*return view('profile ', ['data' => User::all()]);*/

    }
}
