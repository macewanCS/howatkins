@extends('layouts.master')


@section('content')

<h2 class="title">Login</h2>

{{ Form::open(['route' => 'sessions.store']) }}
    <fieldset>
    <legend>Enter User Info</legend>
    <div>
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email') }}
    </div>
    <div>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
    </div>
    <div>{{ Form::submit('Login') }}</div>
    </fieldset>
{{ Form::close() }}
@stop
