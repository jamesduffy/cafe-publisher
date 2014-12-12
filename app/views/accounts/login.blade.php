@extends('layouts/full-screen-form')

@section('body')
<div class="container">

    {{ Form::open(array('url' => 'login', 'class'=>'form-signin')) }}
        <div class="form-group">
            <label for="email" class="sr-only">Email address</label>
            {{ Form::text('email', Input::get('email'), array('class'=>'form-control', 'placeholder'=>'Email', 'autofocus'=>'true')) }}
        </div>

        <div class="form-group">
            <label for="email" class="sr-only">Password</label>
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
        </div>

        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
    {{ Form::close() }}

</div>
@stop
