<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('main');
    }

    public function login(){
        return view('admin.login');
    }

    public function register(){
        return view('admin.register');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
