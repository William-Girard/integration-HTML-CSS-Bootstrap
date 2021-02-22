<!DOCTYPE html >

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Unity product page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- JQuery de Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <!-- CSS Perso -->
    <link rel="stylesheet" href="index.css">
    
</head>

<body>
    <!-- Menu en tête -->
    <header>
        <?php include('Nav.php'); ?>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <h1>Fashion Product Name</h1>
                </div>
                <div class="col-8 text-center">
                    <p>Women/Dress</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="container-fluid px-sm-1 py-5 mx-auto">
                        <div class="row justify-content-center">
                            <div class="d-flex">
                                <div class="card">
                                    <div class="col-1">
                                        <div class="d-flex flex-column thumbnails">
                                            <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/wL1uRBk.jpg"> </div>
                                            <div id="f2" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/3NusNP2.jpg"> </div>
                                            <div id="f3" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/pXUPOVR.jpg"> </div>
                                            <div id="f4" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/xX5Qmsa.jpg"> </div>
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <fieldset id="f11" class="active">
                                            <div class="product-pic"> <img class="pic0 img-fluid" src="https://i.imgur.com/wL1uRBk.jpg"> </div>
                                        </fieldset>
                                        <fieldset id="f21" class="">
                                            <div class="product-pic"> <img class="pic0 img-fluid" src="https://i.imgur.com/3NusNP2.jpg"> </div>
                                        </fieldset>
                                        <fieldset id="f31" class="">
                                            <div class="product-pic"> <img class="pic0 img-fluid" src="https://i.imgur.com/pXUPOVR.jpg"> </div>
                                        </fieldset>
                                        <fieldset id="f41" class="">
                                            <div class="product-pic"> <img class="pic0 img-fluid" src="https://i.imgur.com/xX5Qmsa.jpg"> </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="row ">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="row">
                                <div class="col-4">
                                    <h2>$500 <span class="redbox">30% OFF</span> </h2>
                                </div>
                                <div class="col-4 text-start align-content-around">
                                    <p class="pricegrey">5 pieces left</p>
                                </div>
                                <div class="col-4 text-end">
                                    <p class="starrating">Etoiles rating</p>
                                </div>
                            </div>
                        </div>
                        <p class="priceline">$1000</p>
                        <div class="trait_dessus"><hr></div>
                        <p>Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque, aenean tempor, arcu magnam nisl nulla .</p>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <p>Size</p>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-light">S</button>
                            <button type="button" class="btn btn-light">M</button>
                            <button type="button" class="btn btn-light">L</button>
                            <button type="button" class="btn btn-light">XL</button>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-6">
                            <p>Color</p>
                        </div>
                        <div class="col-6 justify-content-end d-flex">
                            <div class="cercle1 cercle"> </div>
                            <div class="cercle2 cercle"> </div>
                            <div class="cercle3 cercle"> </div>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-6">
                            <p>Quantity</p>
                        </div>
                        <div class="col-4 text-end">
                            <div class="dropdown">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>1 pièce</option>
                                    <option value="1">2 pièces</option>
                                    <option value="2">3 pièces</option>
                                    <option value="3">4 pièces</option>
                                    <option value="4">5 pièces</option>
                                    <option value="5">6 pièces</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-6">
                            <p>Shipping</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>US & Canada <span class="freeshipping"> FREE SHIPPING </span> <br> $10 Worldwide</p>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-12 justify-content-start">
                            <button type="button" class="myBtn rounded border-2 p-2">ADD TO MY CART 
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                </svg></button>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-between">
                            <div class="col-12">
                                <p>Share On <br> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter cursor me-2" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook cursor me-2" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram cursor me-2" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </p>
                            </div>  
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12">
                                <p>Product Detail</p>
                            </div>
                            <div class="trait_dessus"><hr class="margintop"></div>
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque, aenean tempor, arcu magnam nisl nulla a, sed nec. Ac elit consequat et integer. Sed in lobortis. Pulvinar nulla viverra orci ullamcorper faucibus fermentum,
                                    Tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. llamcorper faucibus fermentum, tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. 
                                </p>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12">
                                <p>Size</p>
                            </div>
                            <div class="trait_dessus"><hr class="margintop"></div>
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Shoulder</th>
                                            <th scope="col">Armhome</th>
                                            <th scope="col">Sleeve</th>
                                            <th scope="col">Cuff</th>
                                            <th scope="col">Bust</th>
                                            <th scope="col">Length</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">S (Small)</th>
                                            <td>24</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">M (Medium)</th>
                                            <td>24</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">L (Large)</th>
                                            <td>24</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">XL (XLarge)</th>
                                            <td>24</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12">
                                <p>FAQ</p>
                            </div>
                            <div class="trait_dessus"><hr class="margintop"></div>
                            <div class="col-12">
                                <p> <b> Lorem ipsum dolor sit amet, tellus enim, varius nec magna?</b>
                                    lobortis neque, aenean tempor, arcu magnam nisl nulla a, sed nec. Ac elit consequat et integer. Sed in lobortis. Pulvinar nulla viverra orci ullamcorper faucibus fermentum <br>
                                    
                                    <b>Tincidunt vitae eget, vivamus velit viverra?</b>
                                    Magnis scelerisque posuere hymenaeos quis ut non. 
                                    
                                </p>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between">
                            <div class="col-12 mb-0">
                                <p>You May Also Like</p>
                            </div>
                            <div class="trait_dessus"><hr class="margintop"></div>
                                <div class="row justify-content-between mt-0">  
                                    <div class="col-4">
                                        <div class="card" style="width: 10rem;">
                                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">$100</h5>
                                                    <p class="card-text">Product Name Here</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 ">
                                        <div class="card" style="width: 10rem;">
                                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">$100</h5>
                                                    <p class="card-text">Product Name Here</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 ">
                                        <div class="card" style="width: 10rem;">
                                            <a href="http://localhost/FashionUinity/Productpage.php" >
                                                <img src="image/Robe1.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">$100</h5>
                                                    <p class="card-text">Product Name Here</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </main>
        <script type="text/javascript" src='index.js'></script>
    </body>
    </html>
    
    