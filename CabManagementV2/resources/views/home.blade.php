@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                @if($user['role'] == 'Driver')
                    <div class="alert alert-success">
                            <p><a href="/dashboard">Proceed to dashboard</a></p>
                        </div>
                @endif
                @if($user['role'] == 'Customer')
                    <div class="alert alert-success">
                            <p><a href="/book">Proceed to book cab</a></p>
                        </div>
                @endif
                @if($user['role'] == 'Admin')
                    <div class="alert alert-success">
                            <p><a href="/views">Proceed to details</a></p>
                        </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
