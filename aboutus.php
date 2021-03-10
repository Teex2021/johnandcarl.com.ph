<?php

// session_start();

// if(isset($_SESSION["uid"])){
//   $userName = $_SESSION["name"];
// }


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>John & Carl Home Depot</title>

    <link rel="icon" href="./img/logo.jpg" type="image/x-icon">

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!-- Local CSS -->
    <link href="css/storelocations.css" rel="stylesheet">

    <style>
    @media screen and (min-width: 1200px) {
        .modal-dialog {
            max-width: 800px;
        }
    }
    </style>

</head>

<body onload="initClock()">

 
    <!-- top header ------------------------------------------------------------->
    <div class="topHeader">
        <div class="socialContent2 mx-3 col-lg-7 p-0 d-flex">
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-phone-square ph"
                    style="margin-left: 30px;"></i> (046) 410-5288</li>
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-envelope env"
                    style="margin-left: 10px;"></i> johncarltrading@gmail.com</li>
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-clock clk" style="margin-left: 10px;"> </i>
            </li>

            <!--digital clock start-->
            <!-- <div class="datetime" style="margin-top: -3px;">
                <div class="date">
                    <span id="dayname">Day</span>
                    <span id="month">Month</span>
                    <span id="daynum">00</span>
                    <span id="year">Year</span>
                    <span id="hour">00</span>
                    <span id="minutes">00</span>
                    <span id="seconds">00</span>
                    <span id="period">AM</span>
                </div>
            </div> -->

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
                    <a class="nav-link" href="aboutus">About Us</a>
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
                <button href='login' type='button'  style='background-color: #F15B27; color: white;' class='btn dropdown-toggle' 
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
                <button class="btn " style="color: #F15B27;" id="cart_container"><a id="navbarDropdown" role="button"
                            data-toggle="dropdown"></a><i class="bi bi-cart3"></i><a href="shoppingcart"></a>
                            &nbsp;<span class="badge badge-light">0</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="width: 600px; margin-left: -520px;">
                        <div class="row">
                            <div class="col-md-3 ml-5">Item</div>
                            <div class="col-md-3">Product</div>
                            <div class="col-md-3">Price</div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Content ---------------------------------------------------------------->
  
    
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
                        <li><a href="aboutus">Company Profile</a></li>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper CDN -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock --------------------------------->
    <script type="text/javascript" src="js/clock.js"></script>    

    <!-- Price Range -->
    <!-- <script src="js/jquery-1.10.2.min.js"></script> -->
    <!-- <script src="js/jquery-ui.js"></script> -->

    <!-- Script Button scroll top ----------------------------------------------->

    <script>
    const btnUp = document.querySelector("#btnUp");

    btnUp.addEventListener("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    </script>

</body>

</html>