<!-- delete -->
<?php

session_start();

if(!isset($_SESSION['username']) and !isset($_SESSION['user-or-admin'])){

    header('location:log.php');
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>ADMIN LOGIN SYS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container center-div shadow p-3">
            <div class="heading text-center mb-5 text-uppercase">ADMIN LOGIN PAGE</div>
            <h2 class="text-center text-success">hello duniya welcome <?php echo $_SESSION['username']; ?> </h2>
        
            <div class="container row d-flex flex-row justify-content-center mb-5">
                <div class="admin-form shadow p-2">
                    <form action="logincheck.php" method="POST">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" name="user" value="" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>first name</label>
                            <input type="text" name="fname" value="" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>last name</label>
                            <input type="text" name="lname" value="" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="pass" value="" class="form-control" autocomplete="off">
                        </div>

                        <input type="submit" class="btn btn-success" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </header>

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