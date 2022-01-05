<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('location:adminlogin.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hello, world!</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- <h1>Hello, world!</h1> -->
  <div class="heading text-center text-uppercase">
    hello sir
    <?php echo $_SESSION['user'] ?> swagat hai
  </div>
  <div class="container">
    <div class="col-lg-12">
      <br>
      <h2 class="text-warning text-center">displaying records</h2>

      <table class="table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">
          <th>car ID</th>
          <th>model </th>
          <th>name</th>
          <th>price</th>
          <th>features</th>
          <th>images</th>
          <th>DELETE</th>
          <th>UPDATE</th>

        </tr>

        <?php

          // $con = mysqli_connect('localhost','root');
          // // check connection
          //   if(!$con){
          //     echo 'Connection error: '. mysqli_connect_error();
          //  }
          //   mysqli_select_db($con, 'car');
          include'conn.php';
            $q = "select * from cardet";

            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){  
         ?>

        <tr class="text-center">
          <td>
            <?php echo $res['carid'];  ?>
          </td>
          <td>
            <?php echo $res['model'];  ?>
          </td>
          <td>
            <?php echo $res['name'];  ?>
          </td>
          <td>
            <?php echo $res['price'];  ?>
          </td>
          <td>
            <?php echo $res['features'];  ?>
          </td>
          <td>
            <?php echo $res['images'];  ?>
          </td>
          <td> <button class="btn btn-danger"> <a href="delete.php?id=<?php echo $res['carid']; ?>"
                class="text-white">delete</a>
            </button></td>

          <td> <button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['carid']; ?>"
                class="text-white">update</a>
            </button></td>

        </tr>
        <?php
                 }
                ?>
      </table>
    </div>
  </div>
  <a href="..\loginsign\logout.php" class=" btn btn-danger">logout </a>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>