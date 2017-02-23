@extends('layouts.app')

@section('content')
<div class="container">

    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('profiles') }}">Profiles</a>
        </div>
        <ul class="nav navbar-nav">


        </ul>
    </nav>

    <h1>All the Profiles</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Mobile</td>
            <td>Email</td>
            <td>Language</td>
            <td>DOB</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ ($value["first-name"]) }}</td>
                <td>{{ ($value["last-name"]) }}</td>
                <td>{{ $value->mobile }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->language }}</td>
                <td>{{ $value->dob }}</td>

                <td>

                    {{ Form::open(array('url' => 'profiles' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this profile', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}


                    <a class="btn btn-small btn-success" href="{{ URL::to('profiles/' . $value->id) }}">Show Profile</a>

                    <a class="btn btn-small btn-info" href="{{ URL::to('profiles/' . $value->id . '/edit') }}">Edit Profile</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection