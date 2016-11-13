<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
*{
margin: 0;
padding: 0;
}
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

.signin{
z-index: -1;
width: 100%;
height: 700px;
background-position: 50% 50%;
background-repeat: no-repeat;
position: fixed;
-webkit-background-size: cover;
background-size: cover;
}
.page{
background-image:url('http://www.livignotaxi.it/wp-content/uploads/sites/3/2016/07/taxi1.jpg');

}
#form{

position: relative;
text-align: center;
padding: 5px;

}

#admin-form{
padding: 25px;
width: 500px;
height: auto;
background-color: rgba(0,0,0,0.9);
margin-left: 400px;
margin-top: 200px;
}

#form-title{
font-size: 20px;
color:#fff;
padding-bottom: 5px;
border-bottom: 1px solid #fff;
}
input[type="text"],input[type="email"],input[type="password"],input[type="number"],input[type="date"]{
padding: 10px 20px;
border: 1px solid #999;
border-radius: 3px;
display: block;
width: 100%;
margin-bottom: 20px;
box-sizing: border-box;
outline: none;
height: 30px;
}
input[type="text"]:focus,input[type="email"]:focus,input[type="password"]:focus,input[type="number"]:focus,input[type="date"]:focus{
border-color: #f13544;
}


</style>
<title>Admin login</title>
</head>
<body>

<div class="signin page">
<div id="form">
<div id="admin-form">
<div id="form-title">LOGIN</div>
<form method="POST" action="admin.php">
AdminName: <br><input type="text" name="Username" size="20"><br>
AdminPassword: <br><input type="password" name="Password" size="20"><br>
<input id="button" type="submit" name="register_btn" value="Login">
</form>

</div>

</div>
</div>

</body>
</html> 


