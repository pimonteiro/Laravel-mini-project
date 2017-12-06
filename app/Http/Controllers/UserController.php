<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use Hash;
use Auth;


class UserController extends Controller
{
    public function login() {
        return view('main');


        if (Auth::attempt(['username' => request('username'), 'password' => request('password')]))
            return Redirect::route('main_auth');
        else {
            echo("Error");
            return view('dashboard');
        }
    }

    public function register() {
        $user = new User;

        $user->username = request('username');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        
        $user->save();

        return Redirect::route('/');
    }

}
