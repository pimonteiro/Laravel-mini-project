<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use Hash;
use Auth;


class UserController extends Controller
{
    public function login(){
        if (Auth::attempt(['username' => request('username'), 'password' => ('password')]))
            return Redirect::route('main_user');
        else return(alert("Error"));
        }

}
