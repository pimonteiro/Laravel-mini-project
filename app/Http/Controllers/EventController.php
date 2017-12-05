<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create() {
        $alert = "Hey there";
        return view('events.show', compact('alert'));
    }
}
