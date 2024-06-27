@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
    Login
</h1>
@stop

@section('content')
<div class="ui four column centered grid">
    <div class="column">
        {!! Form::open(['class'=>'ui form']) !!}
            {!! csrf_field() !!}
            <div class="field">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="field">
                <label for="email">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember">
                    <label>Remember Me</label>
                </div>                 
            </div>

            <div class="field">
                <button class="ui button" type="submit">Login</button>
            </div>
        {!!Form::close()!!}
    </div>
</div>
@stop