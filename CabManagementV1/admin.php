<html>
<head>

</head>

<style type="text/css">
   table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 15px;
    text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2}
table, th, td {
    border: 1px solid black;
}
</style>

<body>
<?php
if(isset($_POST['register_btn'])){
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
echo "<br />";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $name = isset($_POST['Username']) ? $_POST['Username'] : '';
      $pass = isset($_POST['Password']) ? $_POST['Password'] : '';
      
      
      $sql = "SELECT id FROM login WHERE Username = '$name' and Password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      /*$active = $row['active'];*/
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

      	
         
         $_SESSION['name'] = $name;
         
         echo "Welcome Admin";
         echo "<br />";
      }else 
         echo "Your Login Name or Password is invalid";
      
   }
   echo "<br />";
   echo "Drivers associated with us are:";
   echo "<br />";
   $result = mysqli_query($conn,"SELECT * FROM driver");
   echo "<table>";
  
// set table headers
echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>License</th></tr>";
 while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td style='width: 200px;'>" . $row['EmployeeID'] . "</td><td style='width: 200px;'> " . $row['Name'] . "</td><td style='width: 200px;'> " . $row['Address'] . "</td><td style='width: 200px;'> " . $row['Contact'] . "</td><td style='width: 200px;'> " . $row['License'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
          }
 echo "</table>";
  echo "<br />";
   echo "<br />";
   echo "Vehicles available:";
   echo "<br />";
   $res = mysqli_query($conn,"SELECT * FROM vehicle");
   echo "<table>";
  
// set table headers
echo "<tr><th>VehID</th><th>Type</th><th>Mileage</th><th>Insurance</th><th>Ownership</th></tr>";
 while($row = mysqli_fetch_array($res))
          {
          echo "<tr><td style='width: 200px;'>" . $row['VehID'] . "</td><td style='width: 200px;'> " . $row['Type'] . "</td><td style='width: 200px;'>" . $row['Mileage(km/l)'] . "</td><td style='width: 200px;'>" . $row['Insurance'] . "</td><td style='width: 200px;'>" . $row['DriverOwnership'] . "</td></tr>"; 
          }
 echo "</table>";
 echo "<br />";
   echo "<br />";
    echo "Drivers with the vehicle assigned to them:";
   echo "<br />";
   $resu = mysqli_query($conn,"SELECT driver.EmployeeID, Name, Contact, Type
        FROM driver LEFT OUTER JOIN vehicle
        ON driver.EmployeeID = vehicle.VehID");
   echo "<table>";
  
// set table headers
echo "<tr><th>EmpID</th><th>Driver Name</th><th>Contact</th><th>Car assigned</th></tr>";
 while($row = mysqli_fetch_array($resu))
          {
          echo "<tr><td style='width: 200px;'>" . $row['EmployeeID'] . "</td><td style='width: 200px;'> " . $row['Name'] . "</td><td style='width: 200px;'>" . $row['Contact'] . "</td><td style='width: 200px;'>" . $row['Type'] . "</td></tr>"; 
          }
 echo "</table>";
 }
?>
<br>

<label>"Has any of above ceased to be a part of company? If yes then enter driver id to delete the record"</label>
<form action="" method="post">
<label>Employee ID</label>
<input type="number" name="EmployeeID" />
<br />
<input type="submit" name ="del_submit" value="Submit ID">
</form>
<?php
if(isset($_POST['del_submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully\n";

$deid = isset($_POST['EmployeeID']) ? $_POST['EmployeeID'] : '';
$query = "DELETE FROM driver
        WHERE EmployeeID=$deid";


$retval = mysqli_query( $conn, $query);
if(! $retval )
{
  echo "Could not delete data\n";
}
echo "Deleted record successfully\n";
mysqli_close($conn);
}
?>
<p><a href="homepage.php">Go Back</a></p>
<p><a href="login.php">Login again to save changes to company database</a></p>
</body>
</html>

