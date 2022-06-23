<?php 

	// connect to the database
    $con = mysqli_connect('localhost','root');
	// check connection
	if(!$con){
		echo 'Connection error: '. mysqli_connect_error();
	}
	else 
		echo "aaaya re baba";
    mysqli_select_db($con, 'car');
?>