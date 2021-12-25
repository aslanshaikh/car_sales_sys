<?php

session_start();

header('location:log.php');
$con = mysqli_connect('localhost','root');

if($con) {
    echo"connection succesfull ";
}
else{
    echo"not";
}

mysqli_select_db($con, 'car');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from customer where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION["username"] = $name;

    header('location:home.php');
} else{

   header('location:log.php');
}

?>