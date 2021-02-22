<!DOCTYPE html >

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Unity</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- CSS Perso -->
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- Menu en tête -->
    
    <?php include('Nav.php'); ?>
    <div class="container">
        <div class="row justify-content-center align-content-center h-100 ">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 bg-image d-flex align-items-center">
                <div class="row justify-content-center text-center">
                    <div class="col-12 text-center">
                        <p class="para1 imagereduc"> <b> Winter Collection </b></p>
                    </div>
                
                    <div class="row justify-content-evenly">
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                            <div class="row text-end">
                                <div class="col-12">
                                    <p class="para1 discount"><b>70</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                            <div class="row text-start">
                                <div class="col-12">
                                    <p class="para1 percent"><b>%</b></p>
                                </div>
                                <div class="col-12">
                                    <p class="para1 offdiscount"> <b>OFF</b> </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-6">
                        <p class="para1">Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque, aenean tempor, arcu magnam </p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="shopcolor">Shop Now </p>
                    </div>
                </div> 
            </div>  
            
            
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-image2">
                        <div class="row">
                            <div class="col-12">
                                <p class="para2"> <b> Winter Party <br> Collection </b></p>
                            </div>
                            <div class="col-12">
                                <p class="para3">Lorem ipsum dolor sit amet, tellus enim.lobortis <br> neque, aenean tempor, arcu magnam</p>
                            </div>
                            <div class="col-12 text-end">
                                <p class="shopbutton">Shop Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-6 bg-image3">
                        <div class="row height2">
                            <div class="col-12">
                                <p class="para4">Men Winter Collection <br> <br> <br> </p>
                            </div>
                            <div class="col-12">
                                <p class="shopbutton"> Shop Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-6  bg-image4">
                        <div class="row">
                            <div class="col-12">
                                <p class="para2">Kids Winter Starting Pack <br> Collection </p>
                            </div>
                            <div class="col-12 align-items-end">
                                <p class="shopbutton"> Shop Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    
    <div class="trait_dessus"><hr></div>
    <div class="container">
        <div class="row">
            <div class="col-6 align-content-center align-middle">
                <p class="subscribe "><i>Subscribe our newsletter and  keep update for new product & Promotion</i></p>
            </div>
            <div class="col-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="Your email address">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-warning">SUBSCRIBE</button>
            </div>
        </div>
    </div>
    <div class="trait_dessus"><hr></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h1>Women Best Selling Product</h1>
            </div>
            <div class="col-8 text-center">
                <p>Lorem ipsum dolor sit amet tellus</p>
            </div>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-evenly">
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top mr-2" alt="Robe blanche a petit poids">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-evenly">
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top mr-2" alt="Robe blanche a petit poids">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-evenly">
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top mr-2" alt="Robe blanche a petit poids">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trait_dessus"><hr></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h1>Men Best Selling Product</h1>
            </div>
            <div class="col-8 text-center">
                <p>Lorem ipsum dolor sit amet tellus</p>
            </div>
        </div>
    </div>
    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-evenly">
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top mr-2" alt="Robe blanche a petit poids">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-evenly">
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top mr-2" alt="Robe blanche a petit poids">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-evenly">
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top mr-2" alt="Robe blanche a petit poids">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card" style="width: 18rem;">
                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                <img src="image/veste.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">$100</h5>
                                    <p class="card-text">Product Name Here</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
        <div class="trait_dessus"><hr></div>
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-8 text-center">
                    <h1>Featured Brand</h1>
                </div>
                <div class="col-8 text-center">
                    <p>Lorem ipsum dolor sit amet tellus</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row justify-content-center">
                <img class="col-1" src="image/mango"  alt="Logo marque mango">
                <img class="col-1" src="image/nike"  alt="Logo marque nike">
                <img class="col-1" src="image/H&M"  alt="Logo marque H&M">
                <img class="col-1" src="image/Zara"  alt="Logo marque Zara">
                <img class="col-1" src="image/Forever21"  alt="Logo marque Forever 21">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <img class="col-12" src="image/dailyaccessories"  alt="bandeau noir avec sac a dos">
        </div>
    </div>
    

    <!-- Fin du main -->
    <!-- Début du pied de paragraphe -->
    <footer>
        <?php include('footer.php'); ?>
        
    </footer>
    <!-- Fin du pied de paragraphe -->
</body>
</html>

