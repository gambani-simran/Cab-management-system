@extends('layouts.app')

@section('content')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<div class="content">
<div class="container-fluid">




<!--trips info-->
<div>
    <table class="table">
    <thead>
        <tr>
            <th>User Email</th>
            <th>Driver id</th>
        </tr>
    </thead>
    <tbody id="userinfo">
    @foreach($t as $data)
    <tr>
        <td>{{$data->u_email}}</td>
        <td>{{$data->d_id}}</td>
    </tr>
    @endforeach
    </tbody>
        
    </table>
</div>



</div>
</div>

@endsection