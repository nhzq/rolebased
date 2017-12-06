@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <a href="{{ route('superadmin') }}">Super Admin</a> 
                <a href="{{ route('webadmin') }}">Web Admin</a>
                <a href="{{ route('systemadmin') }}">Sytem Admin</a>

            </div>
        </div>
    </div>
</div>
@endsection