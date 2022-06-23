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
    Welcome <?php echo $_SESSION['user'] ?>
  </div>
  <div class="container">
    <div class="col-lg-24">
      <br>
      <h2 class="text-warning text-center">Displaying Records OF BOOKING  </h2>

      <table class="table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">
          <th> CID</th>
          <th>CARID </th>
          <th>DATE</th>
          

        </tr>

        <?php
          include('conn.php');
            $q = "select * from book";

            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){  
         ?>

        <tr class="text-center">
        <td>
            <?php echo $res['cid'];  ?>
          </td>
          <td>
            <?php echo $res['carid'];  ?>
          </td>
          <td>
            <?php echo $res['date'];  ?>
          </td>
          
          <!-- <td> -->
            <!-- <?php /*
          <img  src="<?php echo htmlspecialchars($res['images']); ?>" alt="Card image cap"> -->
          */?>
          </td> -->
          
        
              
            </tr>
            <?php
                 }
                 ?>
      </table>
    </div>
  </div>
  
  
  <a href="..\loginsign\logout.php" class=" btn btn-primary">logout </a>
  
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