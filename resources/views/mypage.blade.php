@extends('layouts.app')

@section('content')
    <h3>Olá {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!</h3>

    {{ Auth::user()->first_name }}, here are the event you have been on:




    
@endsection