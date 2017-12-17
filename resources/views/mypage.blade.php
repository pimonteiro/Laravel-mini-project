@extends('layouts.app')

@section('content')

    <h1>Profile</h1>
    <div name="profile">
        <strong>Picture</strong><br>
        <strong>Full Name:  </strong> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<br>
        <strong>Number of Badges:  </strong> {{ Auth::user()->n_badges }} 

    </div>

    <br><h3><strong>{{ Auth::user()->first_name }}</strong>, here are the events you have been on:</h3><br>

    <ul>
    @foreach ($events as $event)
        <li><a href="{{ url('dashboard/events/'.$event->name_event) }}">{{ $event->name_event }}</a></li>  
    @endforeach
    </ul>
@endsection