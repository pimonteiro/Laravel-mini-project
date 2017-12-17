@extends('layouts.app')

@section('content')

    <h3><strong>{{ Auth::user()->first_name }}</strong>, here are the events you have been on:</h3><br>

    <ul>
    @foreach ($events as $event)
        <li><a href="{{ url('dashboard/events/'.$event->name_event) }}">{{ $event->name_event }}</a></li>  
    @endforeach
    </ul>
@endsection