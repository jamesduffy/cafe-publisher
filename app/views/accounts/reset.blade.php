@extends('layouts/full-screen-form')

@section('body')
<div class="container">

    {{ Form::open(['action' => 'RemindersController@postReset']) }}
        <div class="form-group">
            <label for="email" class="sr-only">Email address</label>
            {{ Form::text('email', Input::get('email'), ['class'=>'form-control', 'placeholder'=>'Email', 'autofocus'=>'true']) }}
        </div>

        <div class="form-group">
            <label for="password" class="sr-only">New Password</label>
            <input type="password" name="password">
        </div>
    
    	<div class="form-group">
            <label for="password_confirmation" class="sr-only">Confirm New Password</label>
            <input type="password" name="password_confirmation">
        </div>
    	
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password">
    {{ Form::close() }}

</div>
@stop
