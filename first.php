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
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

                <a class="btn btn-outline-primary" href="adminlogin/adminlogin.php" role="button">dealer login</a>
                <a class="btn btn-outline-primary" href="loginsign/log.php" role="button">login</a>

                <a class="btn btn-outline-primary" href="loginsign/reg.php" role="button">sign-up</a>

                   
                </div>
            </div>
        </div>
    </nav>

    

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
                    <h2>Welcome to A.company</h2>

                    <button type="button" class="btn btn-primary">Know More</button>
                    <button type="button" class="btn btn-dark">Quick Look</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carou2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to A.company</h2>
                    <p></p>
                    <button type="button" class="btn btn-primary">Know More</button>
                    <button type="button" class="btn btn-dark">Quick Look</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/800x300/?cars" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to A.company</h2>
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
    <h3>Models</h3>


    <div class="containercard my-10">

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="images/santro.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Hyundai Santro</h5>
                    <p class="card-text">Hyundai Santro is a 5 seater Hatchback available in a price range of ₹ 4.77 -
                        6.45 Lakh. It is available in 9 variants, 1 engine option and 2 transmission options : Manual
                        and AMT. The Santro is available in 5 colours. The mileage of Santro ranges from 20 km/kg to 30
                        km/kg.
                        Engine: 1086 cc
                        Price: ₹ 4.77 Lakh onwards
                        Fuel Type: Petrol & CNG
                        Seating Capacity: 5 Seater</p>
                    <!-- <a href="">know more </a> -->
                    <a class="btn btn-outline-primary" href="first.php" role="button">Book Test-Drive</a>
                    <a class="btn btn-outline-primary" href="about.php" role="button">Buy Now</a>
                </div>
                
            </div>
            <div class="card">
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
        </div>

    </div>
    <!-- footer  -->
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2022 Copyright:
            <a href="index.html"> ACompany.com</a>
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
</body>

</html>