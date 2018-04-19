@extends('layouts.app')

@section('content')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<div class="content">
<div class="container-fluid">

<div class="row">

<div class="col-lg-10 col-md-8 col-lg-offset-1">
<div class="card">
<div class="header">

<h4 class="title" style="font-size: 20px; font-weight: bold;">Your Details</h4>
</div>
<div class="content">
<form role="form" method="POST" action="" id="driverForm" name="driverForm" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">


<div class="col-md-3">
<div class="form-group">

<label>Name</label>
<input class="form-control" name="name" id="name" value="{{ $user->name }}" readonly>


</div>
</div>

</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Email</label>
<input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" readonly>

</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Contact</label>
<input class="form-control" type="text" name="contact" id="contact" value="{{ $user->contact }}" readonly>

</div>
</div>                        




</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label style="padding-right: 140px;" class="control-label">Address</label>

<input class="form-control"   name="address" id="address" >



</div>
</div>
</div>

<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>PAN</label>
<input class="form-control" type="text" name="PAN" id="PAN" >

</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>License</label>
<input class="form-control" type="text" name="license" id="license" >

</div>
</div> 
<div class="col-md-3">
<div class="form-group">
<label>Contract</label>
<input class="form-control" type="date" name="contract" id="contract" >

</div>
</div>                       




</div>

<div id="basicSuccess" class="alert alert-success alert-dismissable" style="display: none;">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<i class="fa fa-check-circle" aria-hidden="true"></i><strong>Form submitted successfully!</strong>
</div>
<div class="text-center">
<button type="submit" id="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
</div>

</form>
</div>


</div>
</div>
</div>

<div class="row">
<div class="col-lg-10 col-md-8 col-lg-offset-1">
<div class="card">
<div class="header">

<h4 class="title" style="font-size: 20px; font-weight: bold;">Status</h4>
</div>
<div class="content">
<form role="form" method="POST" action="" id="statusForm" name="statusForm" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">

<!--<div class="col-md-3">
<div class="form-group">

<label>Approximate location</label>
<input class="form-control" name="" id="" value="" readonly>

</div>
</div>-->

<div class="col-md-3">
<div class="form-group">
<label>Availability</label>
<input class="form-control" type="text" name="availability_flag" id="availability_flag" >
<button type="submit" id="submit" class="btn btn-success btn-fill btn-wd">Submit</button>
</div>
</div>

</div>

</form>
</div>
<!--trips info-->
<div>
    <table class="table">
    <thead>
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Pickup</th>
            <th>Drop</th>
        </tr>
    </thead>
    <tbody id="userinfo">
    <tr>
        <td>{{$trips->u_email}}</td>
        <td>{{$cust->name}}</td>
        <td>{{$cust->contact}}</td>
        <td>{{$paddr}}</td>
        <td>{{$daddr}}</td>
    </tr>
       
    </tbody>
        
    </table>
</div>
<div class="content">
<form role="form" method="POST" action="" id="tripForm" name="tripForm" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">

<div class="col-md-3">
<div class="form-group">
<label>Trip completion</label>

<button type="button" id="submit" class="btn btn-success btn-fill btn-wd">Completed</button>
</div>
</div>

</div>

</form>
</div>
</div>
</div>
</div>

</div>
</div>

<script type="text/javascript">
$(document).ready(function(){

    $('#driverForm').submit(function(event) {
        event.preventDefault();
        var formData = new FormData($('#driverForm')[0]);
        $.ajax({
        type: "POST",
        url: "/insert",
        data: formData,
        contentType: false, 
        processData: false,
        dataType:'json',
        success: function(data)
        {
            $("#basicSuccess").show();
        },
        error: function(jqXHR, status, error)
        {
            var errorsObj = jqXHR.responseJSON; 
        }
        });

    });

    $('#statusForm').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($('#statusForm')[0]);
    $.ajax({
    type: "POST",
    url: "/status",
    data: formData,
    contentType: false, 
    processData: false,
    dataType:'json',
    success: function(data)
    {
        alert("Availability status is now: "+data.msg);
    }
    });

    });

    $('#tripForm').click(function() {
        $("#userinfo").css("display","none");
    });
        

});

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
 


@endsection