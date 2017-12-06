@extends('layouts.app')

@section('content')
<form method="POST" action="register">
    {{ csrf_field() }}

    Username:
    <br>
    <input type="text" id="username" value="">
    <br>
    Email:
    <br>
    <input type="text" id="email" value="">
    <br>
    Password:
    <br>
    <input type="password" id="password" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
@endsection