@extends('layouts.app')

@section('content')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<style type="text/css">
	
body {
  margin: 0;
  padding: 0;
}
h1, p {
  margin: 0;
  padding: 0;
}

</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
<script type="text/javascript">

	var pickupLocLat;
	var pickupLocLong;
	var dropLocLat;
	var dropLocLong;

	function initialize() {
		//pickup
    var myPLatlng = new google.maps.LatLng(19.075984,72.877656);
  	var mapPropP = {
    center:myPLatlng,
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
      
  	};

  	var mapP=new google.maps.Map(document.getElementById("googleMapP"), mapPropP);
    var markerP = new google.maps.Marker({
      position: myPLatlng,
      map: mapP,
      title: 'Drag me!',
      draggable:true  
  	});

    document.getElementById('plat').value= 19.075984
    document.getElementById('plng').value= 72.877656  
    // marker drag event
    google.maps.event.addListener(markerP,'drag',function(event) {
        document.getElementById('plat').value = event.latLng.lat();
        document.getElementById('plng').value = event.latLng.lng();
    });

    //marker drag event end
    google.maps.event.addListener(markerP,'dragend',function(event) {
        document.getElementById('plat').value = event.latLng.lat();
        document.getElementById('plng').value = event.latLng.lng();
        pickupLocLat = event.latLng.lat();
        pickupLocLong = event.latLng.lng();
        alert("lat=>"+event.latLng.lat());
        alert("long=>"+event.latLng.lng());
    });


    //drop
	var myDLatlng = new google.maps.LatLng(19.075984,72.877656);
	var mapPropD = {
	center:myDLatlng,
	zoom:5,
	mapTypeId:google.maps.MapTypeId.ROADMAP

	};  

    var mapD=new google.maps.Map(document.getElementById("googleMapD"), mapPropD);
    var markerD = new google.maps.Marker({
      position: myDLatlng,
      map: mapD,
      title: 'Drag me!',
      draggable:true  
  	});

    document.getElementById('dlat').value= 19.075984
    document.getElementById('dlng').value= 72.877656  
    // marker drag event
    google.maps.event.addListener(markerD,'drag',function(event) {
        document.getElementById('dlat').value = event.latLng.lat();
        document.getElementById('dlng').value = event.latLng.lng();
    });

    //marker drag event end
    google.maps.event.addListener(markerD,'dragend',function(event) {
        document.getElementById('dlat').value = event.latLng.lat();
        document.getElementById('dlng').value = event.latLng.lng();
        dropLocLat = event.latLng.lat();
        dropLocLong = event.latLng.lng();
        alert("lat=>"+event.latLng.lat());
        alert("long=>"+event.latLng.lng());
    });



}//end of initialize

google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function(){

  $('#locationForm').submit(function(event) {
    event.preventDefault();
    //console.log($('#locationForm').serialize().toString());
    var formData = new FormData($('#locationForm')[0]);
    $.ajax({
      type: "POST",
      url: "/booktrip",
      data: formData,
      contentType: false, 
      processData: false,
      dataType:'json',
      success: function(data)
      {
        $("#basicSuccess").show();
        if(data.result == null)
        {
          $("#driverinfo").html("<p>Sorry, no driver available in proximity. Please try again in some time.</p>");
        }
        else
        {
          $("#driverinfo").html("<p>Name: "+data.result.name+"</p><p>Email: "+data.result.email+"</p><p>Contact: "+data.result.contact+"</p>");
        }

      },
      error: function(jqXHR, status, error)
      {
      var errorsObj = jqXHR.responseJSON; 
      }
    });

  });
});
   


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>

<div class="content" style="margin-left: 80px;">
<p>Choose your locations</p>
<form role="form" method="POST" action="" id="locationForm" name="locationForm" enctype="multipart/form-data">
{{ csrf_field() }}
<div style="position: absolute;">
<div id="googleMapP" style="height: 400px; width: 400px; "></div>

    Select your pickup location
    <input type='hidden' name='plat' id='plat'>  
    <input type='hidden' name='plng' id='plng'> 
</div>    

<div style="position: relative; margin-left: 600px;">
<div id="googleMapD" style="height: 400px; width: 400px;"></div>

    Select your drop location
    <input type='hidden' name='dlat' id='dlat'>  
    <input type='hidden' name='dlng' id='dlng'> 
</div>
<div id="basicSuccess" class="alert alert-success alert-dismissable" style="display: none;">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<i class="fa fa-check-circle" aria-hidden="true"></i><strong>Locations submitted successfully!</strong>
</div>
    <button type="submit" id="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
</form>
<div id="driverinfo"></div>
</div>
@endsection