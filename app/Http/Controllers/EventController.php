<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Redirect;

class EventController extends Controller
{
    public function store(){
        
        $event = new Event;
        
        $this->validate(request(),[
			'name_event' => 'required',
			'date_event' => 'required'
        ]);
        
        $event->nome = $request->nome_event;
        $event->data = $request->date_event;

        $event->save();

        return redirect('/dashboard');      
        

    }


}
