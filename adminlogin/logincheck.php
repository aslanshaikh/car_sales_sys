<!-- delete -->
<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con) {
    echo"connection success";
    // echo $who;
}
else{
    echo"not connected";
}

$db = mysqli_select_db($con, 'car');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $who = $_POST['user-or-admin'];
    $sql = "select * from dealer where username = '$username' and password = '$password'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
    if($row == 1) {
        echo "login succesfull";
        $_SESSION['user'] = $username;
        $_SESSION["user-or-admin"] = $who;
            header('location:adminmain.php');
    }
    else{
            echo"login failed";
                header('location:adminlogin.php');
        }
}
else {
    echo "no post content";
}
    
    // $name = $_POST['username'];
    // $pass = $_POST['password'];
    // $who = $_POST['user-or-admin'];
    // $q = "select * from dealer where username = '$name' and password = '$pass' ";
    
    // $result = mysqli_query($con, $q);
    
    // $num = mysqli_num_rows($result);
    // if($num == 1) {
    // } else{
    //     $_SESSION["username"] = $num;
    //     $_SESSION["user-or-admin"] = $who;
// }
?>