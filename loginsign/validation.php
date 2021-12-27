<?php

session_start();
// header('location:first.php');
$con = mysqli_connect('localhost','root');

if($con) {
    echo "connection succesfull ";
}
else{
    echo "not";
}

mysqli_select_db($con, 'car');

$name = $_POST['username'];
$pass = $_POST['password'];
$who = $_POST['user-or-admin'];
$table = "dealer";
if ($who=="user")
    $table = "customer";
$q = "select * from ".$table." where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1) {
    $_SESSION["user"] = $name;
    if ($who=="user")
        header('location: ../first.php');
    else {
        header('location: ../adminlogin/adminmain.php');
    }
} else{
    header('location:home.php');
}

?>