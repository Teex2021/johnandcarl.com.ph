<?php

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

    <link rel="icon" href="./img/logo.jpg" type="image/x-icon">

    <!-- boostrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Local CSS -->
    <link href="css/product_designx.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Local CSS -->
    <!-- <link href="css/contact.css" rel="stylesheet">     -->

</head>

<body>
    <!-- navigation header -->
    <div class="container-fluid p-0 sticky-top">
        <nav class="navbar navbar-expand-lg ">
            <div class="head_orange mx-auto"></div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <image class="img-fluid mx-auto" src="image/logo.jpg" style="width: 250px;"></image>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-align-center">
                    <li class="nav-item">
                        <a class="nav-link link_home" href="index"><small>HOME &nbsp;&nbsp;&nbsp;&nbsp;</small>
                            &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_product" href="products"><small>PRODUCTS&nbsp;&nbsp;&nbsp;&nbsp;</small>
                            &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_store" href="storelocations"><small>STORE
                                LOCATIONS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small> &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_contact" href="contact"><small>CONTACT
                                US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small> &nbsp;</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end of header -->

    <?php
        if(isset($_SESSION["uid"]))
        {
            echo "
                <div class='btn-group'> 
                    <button href='login' type='button' class='btn btn_account dropdown-toggle' 
                        data-toggle='dropdown'> 
                        <i class='bi bi-person-circle'></i> 
                        <small>Hi, $userName</small></a>
                    </button>                                

                    <div class='dropdown-menu'>            
                        <a class='dropdown-item' href='profile'><i class='fas fa-cog'></i>    Settings </a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='logout'><i class='fas fa-sign-out-alt'></i>     Logout </a>
                    </div>                
                
                    <div class='dropdown' id='cart_container'>
                        <button class='btn btn_cart dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'
                            aria-haspopup='true' aria-expanded='false'>
                            <i class='bi bi-cart3' style='color: #F15B27;'></i>
                            <a href='shoppingcart'></a>
                            &nbsp;<span class='badge badge-light'>0</span>
                        </button>
                        <div class='dropdown-menu' style='width: 600px; margin-left: -520px;'>
                        <h6 class='text-success text-center'> CART ITEMS </h6>
                            <div class='dropdown-divider'></div>
                            <div class='row'>                                
                                <div class='col-md-6 text-center'><b>Product</b></div>                                
                                <div class='col-md-3 text-center'><b>Price</b></div>
                                <div class='col-md-3 text-center'><b>Qty</b></div>
                            </div>                
                            <div class='dropdown-divider'></div>
                            <div class='row' id='cart_product'></div>
                        </div>
                    </div>   
                </div>
                ";             
        }else
        {
            echo "
            <div class='btn-group'> 
                <button type='button' class='btn btn_account dropdown-toggle' 
                    data-toggle='dropdown'> 
                    <i class='bi bi-person-circle'></i> 
                    <small>Account</small></a>
                </button>                                

                <div class='dropdown-menu'>            
                    <a class='dropdown-item' href='login'><i class='fas fa-cog'></i>    Create Account? </a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='login'><i class='fas fa-cog'></i>    Login </a>                    
                </div>                        

                <div class='btn'>                  
                  <span class='badge badge-light'><i class='bi bi-cart3' style='color: #F15B27;'></i> Cart 0</span>
                </div>
 
            </div>
                ";
        }
    ?>

    <!-- Content -->
    <div class="container-fluid p-5">
        <div class="container d-flex justify-content-center">
            <div class="card text-center col-lg-12 py-3">
                <div class="card-header text-success">
                    <b>CART ITEMS</b>
                </div>

                <div class="row">

                    <div class='col-md-4'>
                        <b>PRODUCT</b>
                    </div>
                    <div class='col-md-3'>
                        <b>PRICE</b>
                    </div>
                    <div class='col-md-3'>
                        <b>QUANTITY</b>
                    </div>
                    <div class='col-md-2'>
                        <b>TOTAL</b>
                    </div>

                </div>

                <div class="card-footer text-muted">
                </div>

            </div>          
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="p-5">
            <div class="row text-left">
                <div class="col-md-3">

                    <img src="image/logo.png" class="footerLogo">

                    <div>
                        <ul class="list-unstyled">
                            <li class="my-2"><i class="fas fa-phone-square"></i> (046) 410-5288</li>
                            <li class="my-2"><i class="fas fa-mobile"></i> 0923-081-2723</li>
                            <li class="my-2"><i class="fas fa-envelope"></i> johncarltrading@gmail.com</li>
                            <li class="my-2"><i class="fas fa-location-arrow"></i> Bldg. Sta. Rosa-Tagaytay Rd.,
                                Brgy.
                                Putingkahoy, Silang Cavite</li>
                        </ul>

                    </div>
                </div>

                <div class="aboutUs col-md-3">
                    <h5>Navigate</h5>
                    <ul>
                        <li><a href="storelocations">Store Locations</a></li>
                        <li><a href="careers">Careers</a></li>
                    </ul>
                    <br>
                    <h5 class="h52">Customer Support</h5>
                    <ul>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="contact">Terms & Conditions</a></li>
                        <li><a href="contact">FAQ's</a></li>
                    </ul>
                </div>

                <div class="aboutUs col-md-3">
                    <h5 class="h52">Promotions</h5>
                    <ul>
                        <li><a href="contact">On Sale</a></li>
                        <li><a href="contact">Vouchers</a></li>
                    </ul>
                </div>

                <div class="Branches col-md-3 shadow">
                    <p class="lead">Get Into Newsletter!</p>
                    <small>We'll provide latest offers and promotions.</small>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email here"><br>
                    <button type="submit" class="btn btn-info">SUBSCRIBE <i class="fas fa-envelope"></i></button>
                </div>

            </div>
            <div class="text-center">
                <small>&copy; 2021. John & Carls Home Depot Corporation. All Rights Reserved</small>
            </div>
        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Popper CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>