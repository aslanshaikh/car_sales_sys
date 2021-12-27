<?php 

	// connect to the database
	// $conn = mysqli_connect('localhost', 'root', 'root', 'car');

    $con = mysqli_connect('localhost','root');
	// check connection
	if(!$con){
		echo 'Connection error: '. mysqli_connect_error();
	}
    mysqli_select_db($con, 'car');

?>