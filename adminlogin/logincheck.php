<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con) {
    echo"connection success";
}
else{
    echo"not connected";
}

$db = mysqli_select_db($con, 'car');

if(isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $sql = "select * from dealer where username = '$username' and password = '$password'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1) {
            echo "login succesfull";
            $_SESSION['user'] = $username;
            header('location:adminmain.php');
        }
        else{
            echo"login failed";
            header('location:adminlogin.php');
        }
    }
?>