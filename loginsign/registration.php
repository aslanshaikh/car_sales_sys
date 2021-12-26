<?php

session_start();

header('location:reg.php');
$con = mysqli_connect('localhost','root');

if($con) {
    echo"connection succesfull ";
}
else{
    echo"not";
}

mysqli_select_db($con, 'car');

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
   
}

?>