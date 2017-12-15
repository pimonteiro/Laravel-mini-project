@extends('layouts.app')
@section('content')

<style>

#container {
    width: 800px;
    height: 300px;
    display: table;
    position: absolute;
    left: 700px;       
}

#container .image-container {
    text-align: center;
    vertical-align: middle;
    display: table-cell;
}

#container .image-container img {
    max-width: 500px;
    max-height: 500px;
    height: 300px;  
}

</style>



    <div id="container">
        <p>Welcome to the Badges Meteer! Please register or log in.</p>
        <div class="img_container">
            <img src="/images/logo.png">
        </div>
    </div>
@endsection