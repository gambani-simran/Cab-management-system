<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uberlike</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Uberlike
                    <br>
                    <p><a href="#main"><img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-512.png" width="70" height="70"></a>
                    </p>
                </div>

                
            </div>
        </div>
        


<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body 
{font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

<!-- Navbar -->
<div class="-top" id="main">
<ul class="w3-navbar w3-black w3-card-2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-hover-none w3-hover-text-grey w3-padding-large">HOME</a></li>
 <li class="w3-hide-small w3-right"><a href="javascript:void(0)" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a></li>
</ul>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container">
    <img src="http://www.besttravelguru.com/wp-content/uploads/2013/06/5095635_l.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Ride with us</h3>
      <p><b>Entrust us with your travel woes and watch them disappear </b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container">
    <img src="http://www.vizagcabs.co.in/images/cab.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Drive for us</h3>
      <p><b>Get a steady job and income by driving for us</b></p>
    </div>
    </div>
 
  <div class="mySlides w3-display-container">
    <img src="http://coolcabservices.in/wp-content/uploads/2016/04/Get-a-Taxi-My-Taxi-Services.jpg
" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Admin</h3>
      <p><b>Manage drivers, vehicles and passengers of our company</b></p>
    </div>
  </div>
<!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ABOUT US</h2>
    <p class="w3-opacity"><i>We ensure you reach on time always</i></p>
    <p class="w3-justify">Need to go someplace quickly and the trains and buses are too crowded? Dont fret ARRIVE IN STYLE, our cab service assures you your on time arrival.</p>
    <!--<div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Simran Gambani</p>
        <img src="img_bandmember.jpg" class="w3-round w3-margin-bottom" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Rajvi Gandhi</p>
        <img src="img_bandmember.jpg" class="w3-round w3-margin-bottom" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Anushka Iyer</p>
        <img src="img_bandmember.jpg" class="w3-round" style="width:60%">
      </div>
    </div>-->
  </div>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="https://s.w-x.co/catching-cab.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>User</b></p>
           <!-- <p class="w3-opacity">Fri 27 Nov 2016</p>-->
            <p>Register to avail our service.</p>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="http://allhealthcare.monster.com/nfs/allhealthcare/attachment_images/0005/4242/intro.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Admin</b></p>
            <!--<p class="w3-opacity">Sat 28 Nov 2016</p>-->
            <p>Manage company records.</p>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://img-aws.ehowcdn.com/877x500p/photos.demandstudios.com/getty/article/117/191/83386337.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Driver</b></p>
            <!--<p class="w3-opacity">Sun 29 Nov 2016</p>-->
            <p>Register with us to become a driver for our cabs. </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>





    
  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Feedback? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Andheri, Mumbai<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 2435 6781<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: uberlike@mail.com<br>
      </div>
      <div class="w3-col m6">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Comment">
        <button class="w3-btn w3-section w3-right">SEND</button>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Add Google Maps -->
<!--<div id="googleMap" style="height:400px;filter:grayscale(90%);-webkit-filter:grayscale(90%);"></div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
    
function initialize() {
    var mapProp = {
    center: myCenter,
    zoom: 12,
    scrollwheel: false,
    draggable: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
    
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    
var marker = new google.maps.Marker({
    position: myCenter,
});
    
marker.setMap(map);
}
    
google.maps.event.addDomListener(window, 'load', initialize);
</script>-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
  <p><a href="#top" style="text-align: right;">Go to top</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

var modal = document.getElementById('AdminModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




    </body>
</html>
