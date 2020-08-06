<?php
$servername="localhost";
$username="root";
$password="";
$database="chatroom";

//creatiing database connection
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){ //if database connection fails
	die("Failed to connect". mysqli_connect_error());
}

?>