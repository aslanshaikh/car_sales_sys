<?php

session_start();

header('location:reg.php');
include('config/db_connect.php');

$name = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pass = $_POST['password'];

$q = "select * from customer where name = '$name' && email = '$email' && phone = '$phone' && address = '$address' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo"duplicate data found ";
} else{

    $qy = "insert into customer(name, email, phone, address, password) values ('$name', '$email', '$phone', '$address', '$pass')";
    mysqli_query($con, $qy);
    $_SESSION["user"] = $name;
    header('location:home.php');
}

?>