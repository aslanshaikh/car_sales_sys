<?php

include'conn.php';

$carid = $_GET['carid'];

$q = "delete from cardet where carid = $carid";

mysqli_query($con,$q);

header('location:adminmain.php');

?>
<html>
    <title>
        hello
    </title>

</html>