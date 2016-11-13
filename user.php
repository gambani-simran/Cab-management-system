<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>User registration</title>
</head>
<body>
<style type="text/css">
	 #login{
margin-left: 425px;

}
.form{
float: left;

min-width: 500px;
position: relative;
perspective: 1500px;
border:1px solid #f13544;
padding :40px 100px;

background:white;


min-width: 500px;


box-shadow: 0px 50px 30px -30px rgba(241, 53, 68,0.3);


box-sizing: border-box;


}
.form-title{
background: white;
border-bottom: 1px solid #ccc;
display: flex;
justify-content: center;
align-items: center;
}
.form p{
margin:50px;
text-transform: uppercase;
text-align: center;
margin-bottom: 30px;
color: #F13544;
font-weight: 300;
font-size: 24px;
letter-spacing: 1px;
}
input[type="text"],input[type="email"],input[type="password"],input[type="number"],input[type="date"]{
padding: 5px 10px;
border: 1px solid #999;
border-radius: 3px;
display: block;
width: 100%;
margin-bottom: 20px;
box-sizing: border-box;
outline: none;
height: 50px;
}
input[type="text"]:focus,input[type="email"]:focus,input[type="password"]:focus,input[type="number"]:focus,input[type="date"]:focus{
border-color: #f13544;
}
.form-content .button{
margin-left: 105px;
}
.button{
margin-top: 20px;
margin-left: 90px;
padding: 10px 20px;
border-radius: 3px;
background: #F13544;
color: white;
text-transform: uppercase;
letter-spacing: 1px;
display: inline-block;
cursor: pointer;
}
.button:hover {
background-color: #f56363;
color: #fff;
}
</style>
<section id="login" class="wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
<div class="form">

<div class="form-title">
<h3>Signup</h3>
</div>
<div class="form-content">
<p>Hey There, Fill in below details to ride !</p>
<form action="" method="post">
<label>User ID</label>
<input type="number" name="UserId" />
<br />
<label>Name</label>
<input type="text" name="Name" aria-describedby="name-format" required pattern="[A-Za-z]+\s[A-Za-z]+"  title="firstname lastname" required/>
<br />
<label>Contact</label>
<input type="text" name="Contact" maxlength="10" size="30" required />
<br />
<label>E-Mail Address</label>
<input type="email" name="E-mailId" required />
<br />
<label>Address</label>
<input type="text" name="Address" />
<br />
<label>City</label>
<input type="text" name="City" />
<br />
<label>Pincode</label>
<input type="text" name="Pincode" maxlength="6" />
<br />

<input type="submit" name ="submit_form" value="Register">
</form>

</div>


<?php

if(isset($_POST['submit_form'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Saving data......\n";

// Check connection

$uid = isset($_POST['UserId']) ? $_POST['UserId'] : '';
$uname = isset($_POST['Name']) ? $_POST['Name'] : '';
$ucontact = isset($_POST['Contact']) ? $_POST['Contact'] : '';
$email = isset($_POST['E-mailId']) ? $_POST['E-mailId'] : '';
$uaddress = isset($_POST['Address']) ? $_POST['Address'] : '';
$city = isset($_POST['City']) ? $_POST['City'] : '';
$pin = isset($_POST['Pincode']) ? $_POST['Pincode'] : '';


//Execute the query
$sql = "INSERT INTO `user`(`UserId`,`Name`,`Contact`,`E-mailId`,`Address`,`City`,`Pincode`)
				VALUES('".$uid."','".$uname."','".$ucontact."','".$email."','".$uaddress."','".$city."','".$pin."')";
if(!$result = mysqli_query($conn, $sql))
		echo "Not working";
	else
		echo "You are now a registered user.";

mysqli_close($conn);
}
 
?>
<p><a href="homepage.php">Go Back</a></p>

<p><a href="check.php">Proceed to ride</a></p>
</div>
</section>
</body>
</html>
