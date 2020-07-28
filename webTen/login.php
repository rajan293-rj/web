<?php
session_start();
if(isset($_SESSION['uname']))
	header('Location:registration.php');

if(isset($_POST['uname']))
{
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	
	$con = mysqli_connect('localhost','root','','test');
	
	$query = "SELECT password from signup where username='$uname'";
	$q = mysqli_query($con,$query) or die(mysqli_error($con));
	$k = mysqli_fetch_assoc($q) or die(mysqli_error($con));
	
	if($k['password'] == sha1($pword))
	{
		$_SESSION['uname'] = $uname;
		header('Location:registration.php');
	}
}
?>

<!-------<form action="login.php" method="POST">
Username: <input type="text" name="uname" id="uname"  /><br>
Password: <input type="password" name="pword" id="pword" /><br>
<input type="submit" name="submit" id="submit" value="LOG IN" />
</form>---->




<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width+device-width, initial-scale=1">
	<title>Webten Education</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="css/style.css">
	
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.button1 {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 18px;
  border: none;
  cursor: pointer;
  width: 30%;
}
.button2 {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 18px;
  border: none;
  cursor: pointer;
  width: 15%;
}


button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>

</head>

<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<img src="img/logo.png" style="width: 200px;"> 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button> 
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				
				<li class="nav- item active">
						<h5><a class="nav-link" href="http://localhost/webster/index.html">Home</a></h5>
				</li>
				<li class="nav-item">
						<h5><a class="nav-link" href="http://localhost/webster/about.html">About</a></h5>
				</li>
				 <li class="nav-item">
						<h5><a class="nav-link" href="#">Contact Us</a></h5>
				</li>
			
		</div>
	</div>
</nav> 
<a href="http://localhost/registration.php">
<button type="submit" name="submit" id="submit" class="button2">Sign Up</button></a>
	<div>
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img/avatar.png" alt="Avatar" class="avatar" ">
  </div>

  <div class="container">
    <center>Username: <input type="text" name="uname" id="uname"  /><br>
Password: <input type="password" name="pword" id="pword" /><br>
<button type="submit" name="submit" id="submit" class="button1">Login</button>
	<br><center></div>
  </div>
</form>
</div>
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-google-plus-g"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
	</div>
</div>
</div>


</body>

</html>
