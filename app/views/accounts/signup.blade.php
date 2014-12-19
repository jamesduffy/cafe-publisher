@extends('layouts.welcome')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            {{ Form::open(['url' => 'signup']) }}
                {{  $errors->first('email') }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    {{ Form::text('email', Input::get('email'), ['class'=>'form-control']) }}
                </div>

                {{  $errors->first('password') }}
                <div class="form-group">
                    <label for="password">Password</label>
                    {{ Form::password('password', ['class'=>'form-control']) }}
                </div>

                {{  $errors->first('password_confirmation') }}
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    {{ Form::password('password_confirmation', ['class'=>'form-control']) }}
                </div>

                {{  $errors->first('agreement') }}
                <div class="checkbox">
                    <label>
                    {{ Form::checkbox('agreement', Input::get('agreement')); }}
                    I agree to the
                    {{ link_to_action('StaticPagesController@getTermsOfService', 'Terms of Service') }}
                    and
                    {{ link_to_action('StaticPagesController@getPrivacyPolicy', 'Privacy Policy') }}
                    </label>
                </div>

                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up">
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
