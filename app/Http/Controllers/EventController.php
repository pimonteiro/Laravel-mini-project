<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use Auth;
use Redirect;
use Validator;

class EventController extends Controller
{
    public function store(Request $request){
        if ($request->name_event == 'Other....') $request->merge(array('name_event' => $request->other));

        $user = User::find(Auth::user()->id);

        $validator = Validator::make($request->all(),[
			'name_event' => 'required|max:255|unique:events',
			'date_event' => 'required'
        ]);
            
        if($validator->fails()){
            $event = Event::whereName_event(request('name_event'))->first();
            $check = $event->users->where('pivot.user_id',$user->id)->all();
            if ($check == null){
                $user->events()->syncWithoutDetaching($event->id);
            }
            else redirect('/dashboard')->withErrors($validator);
        }
        else {
            $event = new Event;
        
            $event->name_event = request('name_event');
            $event->date_event = request('date_event');

            $event->save();

            $user->n_badges += 1;
            $user->save();
            $user->events()->syncWithoutDetaching($event->id);
        }

        return redirect('/dashboard');      
    }


    public function profile() {
        $user = User::find(Auth::user()->id);
        $events = $user->events;

        return view('mypage', compact('events'));
        
    }

    public function show($name){
        $event = Event::whereName_event($name)->first();
        $users = $event->users->all();
        
        return view('event',compact('name','users'));
        
    }


}
