@extends('layouts/full-screen-form')

@section('body')
<div class="container">

    {{ Form::open(array('action' => 'RemindersController@postRemind')) }}
        <div class="form-group">
            <label for="email" class="sr-only">Email address</label>
            {{ Form::text('email', Input::get('email'), array('class'=>'form-control', 'placeholder'=>'Email', 'autofocus'=>'true')) }}
        </div>

        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Send Reset Email">
    {{ Form::close() }}

</div>
@stop
