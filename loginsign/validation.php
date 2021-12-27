<?php

session_start();
// header('location:first.php');
include('../config/db_connect.php');

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
    if ($who=="user") {
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $id = 1;
        foreach($users as $user) {
            $id = $user['cid'];
        }
        $_SESSION["customerId"] = $id;
        header('location: ../first.php');
    }
    else {
        header('location: ../adminlogin/adminmain.php');
    }
} else{
    header('location:home.php');
}

?>