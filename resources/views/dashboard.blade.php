@extends('layouts.app')

@section('content')
    Welcome to your Dashboard!


    <h3>Please add an event</h3>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Event</div>
                    
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('add_event') }}">
                            {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name of Event</label>

                            <div class="col-md-6">
                                <input id="name_event" type="text" class="form-control" name="name_event" value="{{ old('name_event') }}" required autofocus>

                                @if ($errors->has('name_event'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_event') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_event') ? ' has-error' : '' }}">
                            <label for="date_event" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="date_event" type="date" class="form-control" name="date_event" required>

                                @if ($errors->has('date_event'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_event') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

@endsection