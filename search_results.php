<?php

// include('database_connection.php');

include "db.php";
session_start();

if(isset($_SESSION["uid"])){
  $userName = $_SESSION["name"];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>John & Carls Home Depot</title>

    <link rel="icon" href="img/logo.jpg" type="image/x-icon">

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Local CSS -->
    <link href="css/product.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style>
    /*---Media Queries --*/
    @media (min-width: 1200px) {}

    @media only screen and (max-width: 992px) {}

    @media (max-width: 870px) {}

    @media only screen and (max-width: 768px) {}

    @media only screen and (max-width: 576px) {

        .product_container {
            margin-top: 70px;
        }

        .row_back,
        .bc_back {
            background-color: white;
        }

    }

    @media (max-width: 360px) {}


    /*
  Extra small (xs) devices (portrait phones, less than 576px)
  No media query since this is the default in Bootstrap

  Small (sm) devices (landscape phones, 576px and up)
  @media (min-width: 576px) { ... }

  Medium (md) devices (tablets, 768px and up)
  @media (min-width: 768px) { ... }

  Large (lg) devices (desktops, 992px and up)
  @media (min-width: 992px) { ... }

  Extra (xl) large devices (large desktops, 1200px and up)
  @media (min-width: 1200px) { ... }
  */
    </style>

</head>

<body>

    <!-- top header ------------------------------------------------------------->
    <div class="topHeader">
        <div class="socialContent2 mx-3 col-lg-7 p-0 d-flex">
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-phone-square ph"
                    style="margin-left: 30px;"></i> (046) 410-5288
            </li>
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-envelope env"
                    style="margin-left: 10px;"></i> johncarltrading@gmail.com
            </li>

        </div>

        <div class="socialContent col-lg-3 p-0 ">
            <a href="#" class="topIcon"><i class="fab fa-facebook fb"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-twitter tw"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-google-plus-g gpl"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-instagram ins"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-youtube yt"></i></a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark pt-0 pb-0">
        <a class="navbar-brand"><img src="img/logo.png" alt="logo" width="200px" height="150px"></a>
        <button class="navbar-toggler navbar-custom" type="button" data-toggle="collapse"
            data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-4 ">
                <li class="nav-item active">
                    <a class="nav-link" href="index">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown">Products</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="products">Floor & Wall Coverings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Bath & Sanitary Wares</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Plumbing & Fittings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Building & Construction</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Paints & Sundries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Doors, Windows, Stairs & Moldings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Hardware</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Tools & Safety</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Electrical & Appliances</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products">Household & Furnitures</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="storelocations">Store Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutusE">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus">Contact Us</a>
                </li>

                <!-- Ilagay ang user name dito sa navigation bar -->
                <?php 
        
        if(isset($_SESSION["uid"])){

            echo "
                  <div class='btn-group'> 
                    <button href='login' type='button' class='btn btn-success dropdown-toggle' 
                    data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
                    <i class='bi bi-person-circle'></i> 
                    <small>Hi, $userName</small></a>
                    </button>
                
                    <div class='dropdown-menu'>            
                    <a class='dropdown-item' href='profile'><i class='fas fa-cog'></i>    Settings </a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='logout'><i class='fas fa-sign-out-alt'></i>     Logout </a>
                    </div>
                  </div>
            ";
        }else
        {
          echo "
            <div class='btn-group'> 
              <button href='login' type='button' style='background-color: #F15B27; color: white;' class='btn btn-outline-light dropdown-toggle' 
              data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
              <i class='bi bi-person-circle'></i> 
              <small>Account</small></a>
              </button>
          
              <div class='dropdown-menu'>            
              <a class='dropdown-item' href='login'><i class='fas fa-sign-in-alt'></i>&nbsp;&nbsp;&nbsp; Login</a>
              <div class='dropdown-divider'></div>              
              <a class='dropdown-item' href='login'><i class='fas fa-user-plus'></i>&nbsp; Create account </a>
              </div>
            </div>
           ";
        }

        ?>

                <li class="nav-item dropdown">
                    <button class="btn" id="cart_container">
                        <a id="navbarDropdown" role="button" data-toggle="dropdown">
                            <i class="bi bi-cart3" style="color: #F15B27;"></i><a href="shoppingcart">
                            </a>
                            &nbsp;<span class="badge badge-light">0</span>
                    </button>


                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="width: 600px; margin-left: -520px;">
                        <div class="row">
                            <div class="col-md-3 text-center">Item</div>
                            <div class="col-md-3 text-center">Product</div>
                            <div class="col-md-3 text-center">Item Description</div>
                            <div class="col-md-3 text-center">Price</div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row" id="cart_product">

                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Side Bar Content ------------------------------------------------------->
    <div class="container-fluid">
        <div class="row row_back" style=" height: 55px;">
            <ol class="breadcrumb col-md-6" style="height: 55px">
                <li class="breadcrumb-item font-weight-bold"> <a href="index"> Home</a> </li>
                <li class="breadcrumb-item active"><a href="products"> Searched Results </a></li>
            </ol>
            <ol class="breadcrumb bc_back col-md-6 p-2" style="height: 55px">
                <div class="input-group" style="margin-left: -180px;">
                    <input type="text" style="font-size: 14px;" class="form-control" placeholder="I'm looking for..."
                        id="search" name="names" aria-describedby="basic-addon1">
                    <button style="font-size: 14px;" class="btn btn-secondary" type="submit"
                        id="search_btn">Search</button>
                </div>
            </ol>
        </div>
        <div class="row product_container">
            <div class="col-md-3">
                <div class="list-group">
                    <h5>Price Range</h5>
                    <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="5000" />
                    <p id="price_show">Min: 0 - Max: 5000</p>
                    <div id="price_range"></div>
                </div>
                <div class="list-group">
                    <div id="get_category"></div>

                </div>

                <div class="list-group">
                    <div id="get_brand"></div>
                </div>
            </div>

            <div class="col-md-9">

                <!-- <div class="input-group mb-3 ">
                    <div class="input-group-prepend">                        
                    </div>
                    <input type="text" class="form-control" placeholder="search by product or brand" id="search"
                        name="names" aria-describedby="basic-addon1">
                    <button class="btn btn-secondary" type="submit" id="search_btn">Search</button>
                </div> -->

                <!-- Show All Products Here -->
                <div class="row" id="get_product">
                    <?php 

                    
                    if(isset($_GET["keyword"])){

                        $text = $_GET["keyword"];
                        echo $text;
                    }
           
                            
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!--- Footer -->
    <footer>
        <div class="container-fluid-6 p-5">
            <div class="row text-left">
                <div class="col-md-3">

                    <img src="img/logo.png" class="footerLogo">

                    <div>
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="fas fa-phone-square"></i> (046) 410-5288</li>
                            <li class="my-2"><i class="fas fa-mobile"></i> 0923-081-2723</li>
                            <li class="my-2"><i class="fas fa-envelope"></i> johncarltrading@gmail.com</li>
                            <li class="my-2"><i class="fas fa-location-arrow"></i> Bldg. Sta. Rosa-Tagaytay Rd., Brgy.
                                Putingkahoy, Silang Cavite</li>
                        </ul>

                    </div>
                </div>

                <div class="aboutUs col-md-3">
                    <h5 class="h51">About Us</h5>
                    <ul>
                        <li><a href="aboutusE">Company Profile</a></li>
                    </ul>
                    <br>
                    <h5 class="h52">Customer Support</h5>
                    <ul>
                        <li><a href="contactus">Contact Us</a></li>
                        <li><a href="careers">Careers</a></li>
                    </ul>
                </div>

                <div class="Branches col-md-3 shadow">
                    <p class="lead">Get Into Newsletter!</p>
                    <small>We'll provide latest offers and promotions.</small>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email here"><br>
                    <button type="submit" class="btn btn-info">SUBSCRIBE <i class="fas fa-envelope"></i></button>
                </div>

                <div class="col-md-3"></div>

                <div class="row text-center mt-5">
                    <h5 class="footerRes">&copy; 2021. John & Carls Home Depot Corporation. All Rights Reserved</h5>
                </div>

            </div>
        </div>
    </footer>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Popper CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock --------------------------------->
    <script type="text/javascript" src="js/clock.js"></script>

    <script src="js/all.js"></script>


</body>

</html>