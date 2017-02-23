@extends('layouts.app')

@section('content')
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('profiles') }}">Profiles</a>
        </div>
        <ul class="nav navbar-nav">
        </ul>
    </nav>

    <h1>Edit {{ ($user["first-name"]) }}</h1>

    <!-- if there are creation errors, they will show here -->

    {{ Form::model($user, array('route' => array('profiles.update', $user->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('first-name', 'Name') }}
        {{ Form::text('first-name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('last-name', 'Surname') }}
        {{ Form::text('last-name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('mobile', 'Mobile') }}
        {{ Form::text('mobile', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('language', 'Language') }}
        {{ Form::text('language', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('dob', 'DOB') }}
        {{ Form::date('dob', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit Profile!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection
