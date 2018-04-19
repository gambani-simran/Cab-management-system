<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif}
.w3-left, .w3-right, .w3-tag {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
@import "compass/css3";

// Font imports

@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);

// Color vars

$white: #fff;
$grey: #ccc;
$dark_grey: #555;
$blue: #4f6fad;
$pink: #ee9cb4;

// Mixins

@mixin lato-book { font-family: 'Lato', sans-serif; font-weight: 300; }
@mixin lato-reg { font-family: 'Lato', sans-serif; font-weight: 400; }
@mixin lato-bold { font-family: 'Lato', sans-serif; font-weight: 700; }
@mixin btn($color) {
  background-color: $color;
  border-bottom-color: darken($color, 15%);
  &:hover {
      background-color: lighten($color, 5%);
    }
}

// Functions

@function pxtoem($target, $context){
  @return ($target/$context)+0em;
}

//

body {
  /*background-color: lighten($grey, 10%);*/
  background-image: url("C:\xampp\htdocs\13080_taxi-nueva-york-e1355437347756.jpg");
  font-size: 100%;
  font-family: "Lato", sans-serif
  @include lato-reg;
}
div, textarea, input {
  @include box-sizing(border-box); 
}  
.container {  
  max-width: 510px;
  min-width: 324px;
  margin: 50px auto 0px;
  background-color: $white;
  border: 1px solid lighten($grey, 1%); 
  border-bottom: 3px solid $grey;
}
.row {
  width: 100%;
  margin: 0 0 1em 0;
  padding: 0 2.5em;
  &.header {
    padding: 1.5em 2.5em;
    border-bottom: 1px solid $grey; 
    background: url(http://niiiick.com/files/blur-city-1.jpg) left -80px;
    color: $white;
  }
  &.body {
    padding: .5em 2.5em 1em;
  }
}
.pull-right {
  float: right; 
}
h1 {
  @include lato-book;
  display: inline-block;
  font-weight: 100;
  font-size: pxtoem(45, 16);
  border-bottom: 1px solid hsla(100%, 100%, 100%, 0.3);
  margin: 0 0 0.1em 0;
  padding: 0 0 0.4em 0;
}
h3 {
  @include lato-reg;
  font-size: pxtoem(20, 16);
  margin: 1em 0 0.4em 0;
}
.btn {
  font-size: pxtoem(17, 16);
  display: inline-block;
  padding: 0.74em 1.5em;
  margin: 1.5em 0 0;
  color: $white;
  border-width: 0 0 0 0;
  border-bottom: 5px solid;
  text-transform: uppercase;
  @include btn(darken($grey, 10%));
  @include lato-book;
  &.btn-submit {
    @include btn($blue);
  }
}

form {
  max-width: 100%;
  display: block;
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
    li {
      margin: 0 0 0.25em 0; 
      clear: both;
      display: inline-block;
      width: 100%;
      &:last-child {
          margin: 0;    
        }
        p {
          margin: 0;
          padding: 0;
          float: left;
          &.right {
            float: right;
          }
        }     
        .divider {
          margin: 0.5em 0 0.5em 0;
          border: 0;
          height: 1px;
          width: 100%;
          display: block;
          background-color: $blue;
          background-image: linear-gradient(to right, $pink, $blue);
        }
        .req {
          color: $pink; 
        }
    }
  }
  label {
    display: block;
    margin: 0 0 0.5em 0;
    color: $blue;
    font-size: pxtoem(16, 16);
  }
  input {
    margin: 0 0 0.5em 0;
    border: 1px solid $grey;
    padding: 6px 10px;
    color: $dark_grey;
    font-size: pxtoem(16, 16);
  }
  textarea {
    border: 1px solid $grey;
    padding: 6px 10px;
    width: 100%;
    color: $dark_grey;
  }
  small {
    color: $blue;
    margin: 0 0 0 0.5em;
  }
}

// Media Queries

@media only screen and (max-width:480px) {
  .pull-right {
    float: none; 
  }
  input {
    width: 100%; 
  }
  label {
    width: 100%;
    display: inline-block;
    float: left;
    clear: both;
  }
  li, p {
   width: 100%; 
  }
  input.btn {
   margin: 1.5em 0 0.5em; 
  }
  h1 {
   font-size: pxtoem(36, 16); 
  }
  h3 {
    font-size: pxtoem(18, 16)
  }
  li small {
   display: none; 
  }
}
</style>
<body>
<div class="container">
  <div class="row header">
    <h1>PLEASE ENTER YOUR RIDE DETAILS &nbsp;</h1>
    <h3>Fill out the details below</h3>
  </div>
  <div class="row body">
    <form action="" method="post">
      <ul>
        
        <li>
          <fieldset>
          <legend>Enter location details</legend>
          <p>
             <label>Pickup location</label>
             <select name = "myPick">
               <option value = "Chembur">Chembur</option>
               <option value = "Mulund">Mulund</option>
               <option value = "Bandra">Bandra</option>
               <option value = "Ghatkopar">Ghatkopar</option>
               <option value = "Kandivali">Kandivali</option>
               
             </select>
          </p>
          
          <p>
             <label>Drop Location</label>
             <select name = "myDrop">
              <option value = "Chembur">Chembur</option>
               <option value = "Mulund">Mulund</option>
               <option value = "Bandra">Bandra</option>
               <option value = "Ghatkopar">Ghatkopar</option>
               <option value = "Kandivali">Kandivali</option>

               
             </select>
          </p>
           <p>
             <label>Select the tie slot you had your journey in:</label>
             <select name = "timej">
              <option value = "9am to 12pm(Peak)">9am to 12pm(Peak)</option>
               <option value = "12pm to 6pm">12pm to 6pm</option>
               <option value = "6pm to 10pm(Peak)">6pm to 10pm(Peak)</option>
               

               
             </select>
          </p>
       </fieldset>
        </li>
        
        <input type="submit" name ="confirm_details" value="Confirm">
</form>

<?php

if(isset($_POST['confirm_details'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// Check connection

$pick = isset($_POST['myPick']) ? $_POST['myPick'] : '';
$drop = isset($_POST['myDrop']) ? $_POST['myDrop'] : '';
$journtime = isset($_POST['timej']) ? $_POST['timej'] : '';
echo "<div style ='font:30px Arial,tahoma,sans-serif;color:#00008B'>You have selected to ride from $pick to $drop</div>";

$sql = "SELECT EmployeeID, Name, Contact FROM driver ORDER BY EmployeeID";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$a = $row['EmployeeID'];
$b = $row['Name'];
$c = $row['Contact'];

echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#556B2F'>You have been assigned the driver:</div>"; 
echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#A52A2A'>ID:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $a</div> ";
  echo "<br>";
  echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#A52A2A'>Name:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $b</div> ";
  echo "<br>";
  echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#A52A2A'>Contact:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $c</div> ";
  echo "<br>";

echo "<br />";

mysqli_close($conn);
}
 
?>
            <div class="divider"></div>
      
      </ul>
    </form>  
  </div>
</div>
<div class="w3-content w3-container" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-section">
 
  </div>

 
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-light-blue w3-padding-16"> BILL:</span>
    <br>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";
$sqluser = "SELECT Name FROM user WHERE UserID=4";
$result = mysqli_query($conn, $sqluser);
$row = mysqli_fetch_assoc($result);

$curr_user = $row['Name'];

$stmt = $conn->prepare("SELECT * FROM location WHERE Pickup=? AND DropLocation=?");

            $stmt->bind_param('ss',$pick,$drop);

            $stmt->execute();

            $get_result =$stmt->get_result();

            $row_count= $get_result->num_rows;

            if($row_count>0)
            {
                    while($row = mysqli_fetch_array($get_result))
                    {
                        $pay = $row['Cost'];
                        if($journtime == "9am to 12pm(Peak)"){
                          $pay = $pay + 2*$pay;
                          echo "<br>";
                          echo "<div style ='font:22px Arial,tahoma,sans-serif;color:#B22222'>Dear $curr_user</div>";
                          echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#556B2F'>Your journey began at:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $pick</div>"; 
echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#A52A2A'>Your destination was:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $drop</div> ";
  echo "<br>";
                          echo "<div style ='font:30px Arial,tahoma,sans-serif;color:#00008B'>You have to pay Rs. $pay </div>";
                          echo "<br>";
                        }
                        if($journtime == "12pm to 6pm"){

                          echo "<br>";
                          echo "<div style ='font:22px Arial,tahoma,sans-serif;color:#B22222'>Dear $curr_user</div>";
                          echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#556B2F'>Your journey began at:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $pick</div>"; 
echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#A52A2A'>Your destination was:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $drop</div> ";
  echo "<br>";
                          echo "<div style ='font:30px Arial,tahoma,sans-serif;color:#00008B'>You have to pay Rs. $pay </div>";
                          echo "<br>";
                        }
                        if($journtime == "6pm to 10pm(Peak)"){
                          $pay = $pay + 2*$pay;
                          echo "<br>";
                          echo "<div style ='font:22px Arial,tahoma,sans-serif;color:#B22222'>Dear $curr_user</div>";
                          echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#556B2F'>Your journey began at:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $pick</div>"; 
echo "<br>";
echo "<div style ='font:20px Arial,tahoma,sans-serif;color:#A52A2A'>Your destination was:</div><div style ='font:20px Arial,tahoma,sans-serif;color:#DC143C'> $drop</div> ";
  echo "<br>";
                          echo "<div style ='font:30px Arial,tahoma,sans-serif;color:#00008B'>You have to pay Rs. $pay </div>";
                          echo "<br>";
                        }
                        
                    }


            }
             else
             {
                 echo "Enter details above";
             }

 $stmt->close();
mysqli_close($conn);

?>


  <!-- Payment -->
  <div class="w3-row-padding" style="margin:0 -16px" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Payment</h3>
      <p>Choose payment mode:
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Cash</li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-btn w3-green w3-padding-medium">Select</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Cheque</li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-btn w3-green w3-padding-medium">Select</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Credit</li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-btn w3-green w3-padding-medium">Select</button>
        </li>
      </ul>
    </div>
  </div>


   
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-blue w3-center">
  <h4>Hope you enjoyed our service !!!</h4>
  <p>Thank you for choosing us. <a href="http://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
  <p><h4><a href="homepage.php">Home</a></p>
</footer>

</body>
</html> 

