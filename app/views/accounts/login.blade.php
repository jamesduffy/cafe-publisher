@extends('layouts/full-screen-form')

@section('body')
<div class="container">

    {{ Form::open(['url' => 'login']) }}
        <div class="form-group">
            <label for="email" class="sr-only">Email address</label>
            {{ Form::text('email', Input::get('email'), ['class'=>'form-control', 'placeholder'=>'Email', 'autofocus'=>'true']) }}
        </div>

        <div class="form-group">
            <label for="email" class="sr-only">Password</label>
            {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) }}
        </div>

        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">

        <p class="text-small text-center" style="margin-top:2em;">
            {{ link_to('password/remind', 'I forgot my password') }}
        </p>
    {{ Form::close() }}

</div>
@stop
