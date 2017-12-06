@extends('layouts.app')

@section('content')
<h3>Log in</h3>
<form method="POST" action="authUser">
    {{ csrf_field() }}

    Username:
    <br>
    <input type="text" id="username" value="">
    <br>
    Password:
    <br>
    <input type="password" id="password" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
@endsection