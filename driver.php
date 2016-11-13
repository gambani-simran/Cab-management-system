<html>
<head>
<style>
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


</head>
<body>
<section id="login">
<div class="form">

<div class="form-title">
<h3>Login</h3>
</div>
<div class="form-content">
<title>Add Driver information</title>
<form action="" method="post">
<label>EmployeeID</label>
<input type="number" name="EmployeeID" />
<br />
<label>Name</label>
<input type="text" name="Name" required />
<br />
<label>Address</label>
<input type="text" name="Address" />
<br />
<label>Contact</label>
<input type="text" name="Contact" maxlength="10" size="30" required />
<br />
<label>PAN Number</label>
<input type="text" name="PANnumber" />
<br />
<label>License</label>
<input type="text" name="License" minlength="5" maxlength="5" placeholder="eg. AS590" />
<br />
<label>Contract Status</label>
<input type="date" name="Contractstatus" required />
<br />
<input type="submit" name ="submitform" value="Add Driver">
</form>
</div>
<p><a href="homepage.php">Go Back</a></p>
</div>


<?php
if(isset($_POST['submitform'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "........\n";

// Check connection
$eid = isset($_POST['EmployeeID']) ? $_POST['EmployeeID'] : '';
$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$address = isset($_POST['Address']) ? $_POST['Address'] : '';
$contact = isset($_POST['Contact']) ? $_POST['Contact'] : '';
$pan = isset($_POST['PAN Number']) ? $_POST['PANnumber'] : '';
$lic = isset($_POST['License']) ? $_POST['License'] : '';
$contract = isset($_POST['Contract status']) ? $_POST['Contractstatus'] : '';

//Execute the query
$sql = "INSERT INTO `driver`(`EmployeeID`,`Name`,`Address`,`Contact`,`PANnumber`,`License`,`Contractstatus`)
				VALUES('".$eid."','".$name."','".$address."','".$contact."','".$pan."','".$lic."','".$contract."')";
if(!$result = mysqli_query($conn, $sql))
		echo "Not working\n";
	else
		echo "<div style ='font:30px Arial,tahoma,sans-serif;color:#A52A2A';text-align=
  'center'>You are now a registered driver of our company.</div>";


mysqli_close($conn);
}

?>
</section>
</body>
</html>