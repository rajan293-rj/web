<!DOCTYPE HTML>

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
	
		#signupform{
			border: 3px solid red;
			color: black;
			background: whitesmoke;
			height: 300px;
			width: 450px;
			padding: 20px;
			border-radius: 9px;
			box-shadow: 7px 7px 7px 7px #333333;
		}
#table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}.button1 {
  background-color: blue;
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button1:hover {opacity: 6}
	</style>

</head>

<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<img src="webster/img/logo.png" style="width: 200px;"> 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button> 
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				
				<li class="nav- item active">
						<h5><a class="nav-link" href="#">Home</a></h5>
				</li>
				<li class="nav-item">
						<h5><a class="nav-link" href="C:\Users\Saurav Chaudhary\Desktop\Webster\About Us\121about.html">About</a></h5>
				</li>
				 <li class="nav-item">
						<h5><a class="nav-link" href="#">Contact Us</a></h5>
				</li>
			
		</div>
	</div>
</nav> 
<br>

<br>
<br>
<div>
				<?php
				session_start();

				if(isset($_SESSION['uname']) == 0)
				{
					echo '<center><form id="signupform" action="signup.php" method="POST" >';
					echo 'NAME: <input type="text" name="name" id="name" /><br><br>';
					echo 'Email: <input type="text" name="email" id="email" /><br><br>';
					echo 'USERNAME: <input type="text" name="uname" id="uname" /><br><br>';
					echo 'PASSWORD: <input type="password" name="pword" id="pword" /><br><br>';
					echo 'COLLEGE: <input type="text" name="college" id="college" /><br><br>';
					echo '<input type="submit" name="submit" id="submit" value="SIGN UP" /><br>';

					echo '</form></center>';
				}
				else
				{
					echo '<h1>WELCOME '.$_SESSION['uname'].'</h1>';
					echo '
<a href="logout.php">
<button type="submit" name="submit" id="submit" class="button1">Logout</button></a>
					';
					echo '<ul style="list-style: none;">
			
<table id="table">
  <tr>
    <th>S.no</th>
    <th>File Name</th>
    <th>Download</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>2.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>3.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>7.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>PHYSICS I</td>
    <td>
						<li><a href="uploads/Webster.docx">Click Me</a></li></td>
  </tr>
</table>
';
				}

				?>
		
</div>



</body>

</html>