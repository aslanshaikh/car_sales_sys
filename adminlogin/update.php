<?php

// include'db_connect.php';
$con = mysqli_connect('localhost','root');
	// check connection
	if(!$con){
		echo 'Connection error: '. mysqli_connect_error();
	}
  mysqli_select_db($con, 'car');

if(isset($_POST['done'])) {

    $carid = $_GET['carid'];
    $model = $_POST['model'];
    $name = $_POST['name'];
    // $price = $_POST['price'];
    // $features = $_POST['features'];
    // $images = $_POST['images'];
    $q = " update cardet set carid=$carid, model = '$model', name='$name' where carid=$carid ";

    $query = mysqli_query($con,$q);

    header('location:adminmain.php');
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <div class="col-lg-6 m-auto">
        <form action="" method="post"> <br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Operation</h1>
                </div>

                <label>name </label>
                <input type="text" name="name" class="form-control"> <br>

                <label>model </label>
                <input type="text" name="model" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done">SUBMIT</button>
                <br>
            </div>
        </form>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>