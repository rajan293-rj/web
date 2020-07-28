<?php
session_start();
if(isset($_SESSION['uname']))
	header('Location:registration.php');

if(isset($_POST['uname']))
{
	$con = mysqli_connect("localhost","root","","test");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$pword = sha1($_POST['pword']);
	$college = $_POST['college'];
	$query = "INSERT INTO signup VALUES('','$name','$email','$uname','$pword','$college')";
	$q = mysqli_query($con,$query) or die(mysqli_query($con));
	
	if($q)
	{
		echo 'SIGN UP SUCCESSFUL.<br>';
		echo'<a href="webster/login1.php"><button type="submit">Login</button></a>';
	}
	else
		echo 'SOMETHING WENT WRONG.<br>';
}
else
{
	echo 'PLEASE COME THROUGH FORM<br>';
}

?>