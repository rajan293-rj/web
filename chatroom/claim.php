<?php 
 //getting the value of post parameter
 $room=$_POST['room'];

 if(strlen($room)>20 or strlen($room)<2)
 {
 	$message="please choose a name between 2 to 20 characters";
 	echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/projects/chatroom";';
    echo '</script>';
 }
 elseif (!ctype_alnum($room)) {
 	$message="please choose an alphanumeric name";
 	echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/projects/chatroom";';
    //window.location.href="http://stackoverflow.com";
    //echo 'window.location="http://stackoverflow.com";';
    echo '</script>';
 }
 else{
      //connect to database
 	  include 'db_connect.php';
 }
 //checking if room already exists
 $sql="SELECT * FROM `rooms` WHERE roomname='$room'";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
 	if (mysqli_num_rows($result)>0) {
 		$message="please choose a different roomname";
 	   echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
       echo 'window.location="http://localhost/projects/chatroom";';
       echo '</script>';
 	}
 	else{
 		$sql="INSERT INTO `rooms` ( `roomname`, `stime`) VALUES ('$room', 'current_timestamp()'); ";
 		if(mysqli_query($conn,$sql)){
 			$message="Your room is ready and you can chat now";
 	        echo '<script language="javascript">';
            echo 'alert("'.$message.'");';
            echo 'window.location="http://localhost/projects/chatroom/rooms.php?roomname=' .$room. '";';
            echo '</script>';
 		}

 	}
 }
 else{
 	echo "Error: ".mysqli_error($conn);
 }

 ?>