<?php
    session_start();
    $login = false;
    if(isset($_SESSION['user'])){
        $login = true;
    }
    include('config/db_connect.php');
    // write query for all pizzas
	$sql = 'SELECT * FROM cardet';

	// get the result set (set of rows)
	$result = mysqli_query($con, $sql);

	// fetch the resulting rows as an array
	$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($con);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="static/first.css">
    <script>
        function loginAlert() {
            alert("Please log-in first");
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AJA Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Tech Blogs</a></li>
                            <li><a class="dropdown-item" href="#">Tech News</a></li>
                            <li><a class="dropdown-item" href="#">Web Devp</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Write About Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">Contact Us</a>
                    </li>
                </ul>
                
                <div class="mx-2">

                <!-- <a class="btn btn-outline-primary" href="adminlogin/adminlogin.php" role="button">dealer login</a> -->
                <a class="btn btn-outline-primary" id="dealer-login" role="button">Dealer Log-in</a>
                <!-- <a class="btn btn-outline-primary" href="loginsign/log.php" role="button">login</a> -->
<!-- 64, last script, 74-86 -->
<?php 
            if($login == true) {
                echo '<a href=" loginsign/logout.php" class="btn btn-outline-primary" id="login" role="button">Log out</a>';
            }
            else {
                echo '<a class="btn btn-outline-primary" id="login" role="button">Log in</a>';
            }
        ?>
                <a class="btn btn-outline-primary" href="loginsign/reg.php" role="button">sign-up</a>
                
                
            </div>
        </div>
    </div>
</nav>

<div class="form-popup" id="login-form-div">
    <form action="loginsign/validation.php" class="form-container" method="post" id="login-from">
        <h1>Login</h1>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <input type="hidden" name="user-or-admin" id="user-or-admin">
        <button type="submit" class="btn btn-primary" id="login-submit" name="submit">Login</button>
    </form>
</div>
<hr>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/carou1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to AJA company</h2>

                    <button type="button" class="btn btn-primary">Know More</button>
                    <button type="button" class="btn btn-dark">Quick Look</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carou2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to AJA company</h2>
                    <p></p>
                    <button type="button" class="btn btn-primary">Know More</button>
                    <button type="button" class="btn btn-dark">Quick Look</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/800x300/?cars" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to AJA company</h2>
                    <button type="button" class="btn btn-primary">Know More</button>
                    <button type="button" class="btn btn-dark">Quick Look</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr>
    <br>
    <br>
        <?php 
            if($login == true) {
                echo "<h3>Welcomee ".$_SESSION['customerId']." </h3>";
            }
        ?>
    <h3>Models 
    </h3>


    <div class="containercard my-10">
        <div class="card-group">
            <?php foreach($cars as $car): ?>
                <div class="card">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($car['images']); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Hyundai <?php echo htmlspecialchars($car['name'])." ".htmlspecialchars($car['model']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($car['features']); ?></p>
                        <!-- <a href="">know more </a> -->
                        <?php if($login == true) : ?>
                            <a class="btn btn-outline-primary" role="button" href="bookCar.php?carId=<?php echo $car['carid'] ?>&userId=<?php echo $_SESSION['customerId'] ?>">Book Your Car</a>
                            <a class="btn btn-outline-primary" role="button" href="first.php?carId=<?php echo $car['carid'] ?>&userId=<?php echo $_SESSION['customerId'] ?>">Book Test-Drive</a>
                        <?php else : ?>
                            <button class="btn btn-outline-primary" id="btn-book" onclick="loginAlert();">Book Test-Drive</button>
                            <button class="btn btn-outline-primary" id="btn-test" onclick="loginAlert();">Buy Now</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>    
            <!-- <div class="card">
                <img class="card-img-top" src="images/gi10nios.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Grand i10 nios</h5>
                    <p class="card-text">Hyundai Grand i10 Nios Era mileage : It returns a certified mileage of 20.7
                        kmpl. ... Hyundai Grand i10 Nios Era Engine and Transmission: It is powered by a 1197 cc engine
                        which is available with a Manual transmission. The 1197 cc engine puts out 81.86bhp@6000rpm of
                        power and 113.75Nm@4000rpm of torque.
                        Mileage (upto): 20.7 kmpl
                        Transmission: Manual
                        Engine (upto): 1197 cc
                        Seats: 5
                    </p>

                    <a class="btn btn-outline-primary" href="first.php" role="button">Book Test-Drive</a>
                    <a class="btn btn-outline-primary" href="about.php" role="button">Buy Now</a>
                </div>
              
            </div>
            <div class="card">
                <img class="card-img-top" src="images/creta2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Creta</h5>
                    <p class="card-text">The Hyundai Creta has 1 Diesel Engine and 2 Petrol Engine on offer. The Diesel engine is 1493 cc while the Petrol engine is 1497 cc and 1353 cc . It is available with Manual & Automatic transmission.Depending upon the variant and fuel type the Creta has a mileage of 16.8 to 21.4 kmpl . The Creta is a 5 seater 4 cylinder car and has length of 4300mm, width of 1790mm and a wheelbase of 2610mm.</p>
                        <a class="btn btn-outline-primary" href="first.php" role="button">Book Test-Drive</a>
                        <a class="btn btn-outline-primary" href="about.php" role="button">Buy Now</a>
                </div>
               
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="images/elantra2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Elantra</h5>

                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                        <a class="btn btn-outline-primary" href="first.php" role="button">Book Test-Drive</a>
                        <a class="btn btn-outline-primary" href="about.php" role="button">Buy Now</a>
                </div>
               
            </div>
            <div class="card">
                <img class="card-img-top" src="images/i20.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">I20</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <a class="btn btn-outline-primary" href="first.php" role="button">Book Test-Drive</a>
                    <a class="btn btn-outline-primary" href="about.php" role="button">Buy Now</a>
                </div>
                
            </div>
            <div class="card">
                <img class="card-img-top" src="images/tucson2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tucson</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                        <a class="btn btn-outline-primary" href="first.php" role="button">Book Test-Drive</a>
                        <a class="btn btn-outline-primary" href="about.php" role="button">Buy Now</a>
                </div>
               
            </div>
        </div> -->

    </div>
    <!-- footer  -->
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2022 Copyright:
            <a href="first.php"> ACompany.com </a>
        </div>

        <!-- Copyright -->

    </footer>
    <!-- Footer -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Lets get started');
        
        document.querySelector('#login-form-div').style.display = 'none';
        // // Use buttons to toggle between views
        // document.getElementsByClassName('login-required').addEventListener('click', () => {
        //         console.log("Hello");
        //         alert("PLease log-in first");
        //     }
        // );


        document.querySelector('#login').addEventListener('click', () => {
            if(document.querySelector('#login-form-div').style.display == 'none') {
                document.querySelector('#user-or-admin').setAttribute("value", "user");
                console.log(document.querySelector('#user-or-admin').getAttribute("value"));
                // document.querySelector('#login-title').innerHTML = "User Login"
                // document.querySelector('#login-form').setAttribute("action", "loginsign/validation.php");
                document.querySelector('#login-form-div').style.display = 'block';
            }
            else {
                document.querySelector('#login-form-div').style.display = 'none';
            }
        });
        document.querySelector('#dealer-login').addEventListener('click', () => {
            if(document.querySelector('#login-form-div').style.display == 'none') {
                document.querySelector('#user-or-admin').setAttribute("value", "admin");
                console.log(document.querySelector('#user-or-admin').getAttribute("value"));
                document.querySelector('#login-form-div').style.display = 'block';
                // document.querySelector('#login-form').setAttribute("action", "adminlogin/logincheck.php");
                // document.querySelector('#login-title').innerHTML = "Admin Login";
            }
            else {
                document.querySelector('#login-form-div').style.display = 'none';
            }
        });
    });
</script>
</body>

</html>