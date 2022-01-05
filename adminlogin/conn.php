<?php 

	// connect to the database
    $con = mysqli_connect('localhost','root');
	// check connection
	if(!$con){
		echo 'Connection error: '. mysqli_connect_error();
	}
    mysqli_select_db($con, 'car');
?>