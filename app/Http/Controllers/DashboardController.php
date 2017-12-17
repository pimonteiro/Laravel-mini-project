<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        $events = Event::all()->all();
        dd($events);

        return view('dashboard',compact('events'));
    }


}
