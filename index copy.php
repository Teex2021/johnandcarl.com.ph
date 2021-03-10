<?php

// session_start();

// if(isset($_SESSION["uid"])){
//   header("location:profile");
// }

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

    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="css/index123.css" type="text/css" rel="stylesheet">

    <link href="css/productlist.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
    /*---Media Queries --*/
    @media (min-width: 1200px) {}

    @media only screen and (max-width: 992px) {

        /* Carousel Index Image */
        .carousel-inner>.carousel-item>img {
            width: 950px;
            margin-left: 20px;
            transition: 0.3s all ease;
        }

        .carousel-caption {
            font-size: 15px;
            transition: 0.3s all ease;
        }

        .swiper-wrapper .swiper-slide {
            margin-left: 150px;
        }

        .social a {
            font-size: 4em;
            padding: 2rem;
        }

        .textDisc {
            margin-left: 60px;
            margin-top: 50px;
        }

        .textDisc2 {
            margin-left: 60px;
            margin-top: 50px;
        }

        .textDisc3 {
            margin-left: 60px;
            margin-top: 50px;
        }
    }

    @media (max-width: 870px) {

        /* Carousel Index Image */
        .carousel-inner>.carousel-item>img {
            width: 830px;
            margin-left: 20px;
            transition: 0.3s all ease;
        }

        .carousel-caption {
            font-size: 12px;
            transition: 0.3s all ease;
        }

        .container:before {
            content: '';
            position: absolute;
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            background: linear-gradient(-45deg, #E75721, #F15A22);
            top: 10%;
            right: 0;
            transform: translate(-100%, -40%);
            z-index: 6;
            transition: 1.8s ease-in-out;
        }

        /* Animation */
        .container.sign-up-mode:before {
            transform: translate(20%, -50%);
            left: 5%;
        }

        .container.sign-up-mode .right-panel .content {
            transform: translate(10%, -50%);
        }

        .input-field .icons {
            text-align: center;
            line-height: 55px;
            color: #acacac;
            transition: 0.5s;
            font-size: 1.1rem;
            margin-left: 15px;
            margin-top: 18px;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;
            line-height: 1;
            font-weight: 600;
            font-size: .8rem;
            color: #333;
            margin-left: 10px;
        }

        .social-icon {
            height: 30px;
            width: 30px;
            border: 1px solid black;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            border-radius: 50%;
            transition: 0.3s;
        }
    }

    @media only screen and (max-width: 768px) {

        /* Carousel Index Image */
        .carousel-inner>.carousel-item>img {
            width: 700px;
            margin-left: 20px;
            transition: 0.3s all ease;
        }

        .swiper-wrapper .swiper-slide {
            margin-left: 150px;
        }

        .textDisc,
        .textDisc2,
        .textDisc3 {
            margin-left: 50px;
            margin-top: 40px;
        }

        .carousel-caption {
            top: 45%;
        }

        .carousel-caption h1 {
            font-size: 350%;
        }

        .carousel-caption h3 {
            font-size: 140%;
            font-weight: 400;
            padding-bottom: .2rem;
        }

        .carousel-caption .btn {
            font-size: 95%;
            padding: 10px 14px;
        }

        .display-4 {
            font-size: 150%;
        }

        .social a {
            font-size: 2.5em;
            padding: 2rem;
        }

        .carousel-indicators {
            display: none;
        }

        .col-6 .nav-itemUser {
            margin-left: 170px;
            position: absolute;
            margin-top: -10px;
        }

        .col-6 .nav-itemBasket {
            margin-left: 120px;
            position: absolute;
            margin-top: -10px;
        }

        /* Brand Slider */
        .carousel-cell3 {
            margin-left: 100px;
            margin-top: 250px;
            width: 30%;
            height: 180px;
        }

        .img-set3 {
            width: 130%;
            height: 180px;
            margin-left: -20px;
        }

        .container-fluid-brandSlider {
            margin-top: -240px;
        }


    }

    @media only screen and (max-width: 576px) {

        /* Carousel Index Image */
        .carousel-inner>.carousel-item>img {
            width: 540px;
            margin-left: 20px;
            transition: 0.3s all ease;
        }

        .carousel-caption {
            font-size: 10px;
            transition: 1s all ease;
        }

        .textDisc,
        .textDisc2,
        .textDisc3 {
            margin-left: 220px;
            margin-top: 80px;
        }

        .socialContent2 li {
            display: none;
        }

        .date span {
            opacity: 0;
        }

        form {
            padding: 0 1.5rem;
        }

        .image {
            display: none;
        }

        .panel .content {
            padding: 0.5rem 1rem;
        }

        .container:before {
            bottom: 72%;
            left: 50%;
        }

        .container.sign-up-mode:before {
            bottom: 28%;
            left: 50%;
        }

    }

    @media (max-width: 360px) {

        /* Carousel Index Image */
        .carousel-inner>.carousel-item>img {
            width: 360px;
            margin-left: 0;
            transition: 0.3s all ease;
        }

        .carousel-caption {
            font-size: 8px;
            transition: 0.3s all ease;
        }
    }


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

<!-- <body onload="initClock()"> -->

<body>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v9.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution="setup_tool" page_id="114205956690508" theme_color="#161C33">
    </div>

    <!-- top header ------------------------------------------------------------->
    <div class="topHeader">
        <div class="socialContent2 mx-3 col-lg-7 p-0 d-flex">
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-phone-square ph"
                    style="margin-left: 30px;"></i> (046) 410-5288</li>
            <li style="font-size: 12px; list-style: none;"><i class="fas fa-envelope env"
                    style="margin-left: 10px;"></i> johncarltrading@gmail.com</li>
            <!-- <li style="font-size: 12px; list-style: none;"><i class="fas fa-clock clk" style="margin-left: 10px;"> </i>
            </li> -->

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

        <!-- Social on top -->
        <div class="socialContent col-lg-3 p-0 ">
            <a href="#" class="topIcon"><i class="fab fa-facebook fb"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-twitter tw"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-google-plus-g gpl"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-instagram ins"></i></a>
            <a href="#" class="topIcon"><i class="fab fa-youtube yt"></i></a>
        </div>
    </div>

    <!-- Navigation ------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark  pt-0 pb-0">
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
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown">Products</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="products">Floor & Wall Coverings</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="storelocations">Store Locations</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="aboutus">About Us</a>
                </li> -->
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

                <!-- ORIGINAL TEXT SA NAVIGATION BAR -->
                <!-- <div class="btn-group"> 
            <button href="login" type="button" class="btn btn-success dropdown-toggle" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <i class="bi bi-person-circle"></i> 
            <small>Account</small></a>
            </button>
          
            <div class="dropdown-menu">
            <a class="dropdown-item" href="login"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp; </a>
            <a class="dropdown-item" href="login"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp; Login</a>
            <div class="dropdown-divider"></div>              
            <a class="dropdown-item" href="login"><i class="fas fa-user-plus"></i>&nbsp; Create account </a>
            </div>
        </div> -->

                <li class="nav-item dropdown">
                    <button class="btn " style="color: #F15B27;" id="cart_container"><a id="navbarDropdown"
                            role="button" data-toggle="dropdown"></a><i class="bi bi-cart3"></i><a
                            href="shoppingcart"></a>
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

                    <div class="row" id="cart_product"></div>

                </li>
            </ul>
        </div>
    </nav>

    <!--- Image Slider -->
    <div class="row">
        <div class="col-md-12">
            <div id="slides" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner ">

                    <div class="carousel-item active text-center">
                        <img src="img/prodSlider.png">
                        <div class="carousel-caption">
                            <h1>Interior Design</h1>
                            <h3>Cozy Lifestyle</h3>
                            <button type="button" class="btn btn-outline-light">COLLECTIONS</button>
                            <button type="button" class="btn btn-primary">SEE MORE</button>
                        </div>
                    </div>

                    <div class="carousel-item text-center">
                        <img src="img/prodSlider2x.jpg">
                    </div>

                    <div class="carousel-item text-center">
                        <img src="img/prodSlider3.jpg">
                    </div>

                </div>

                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </div>
    <!-- Product Slider -->
    <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <center>
        <hr class="line">
      </center>
      <h3 class="text-center">Featured Products</h3>
    
      <div class="carousel-item active">
        <div class="row">
          <div class="col-2"><img class="d-block w-100" src="img/1.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/2.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/3.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/4.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/5.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/6.png" alt="Upuan"></div>
        </div>
      </div>
     
      <div class="carousel-item">
        <div class="row">
          <div class="col-2"><img class="d-block w-100" src="img/1.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/2.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/3.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/4.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/5.png" alt="Upuan"></div>
          <div class="col-2"><img class="d-block w-100" src="img/6.png" alt="Upuan"></div>
        </div>
      </div>

   
    </div>


    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 
    </div> -->

    <!-- Featured Product Slider -->
    <br>
    <h4 class="text-center">Featured Products</h4>

    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php 
                      
                            // Include database configuration file 
                            require_once 'db.php'; 
                            
                            $limit = 50; 
                            
                            // Fetch records based on the limit 
                            $query = $con->query("SELECT * FROM tblproduct ORDER BY product_id DESC LIMIT $limit"); 
                            
                            if($query->num_rows > 0)
                            {                                
                        

    
                        while($row = $query->fetch_assoc())
                        { 
                            
                            $pro_id = $row['product_id'];            
                            $pro_desc = $row['product_desc'];
                            $pro_price = $row['product_price'];
                            $pro_image = $row['product_image'];

                            $pro_money = number_format($pro_price);
                     
    
                            echo 
                            "
                            <div class='swiper-slide'>
                            <div class='slider-box post'>
                            <p class='time'></p>
                            <div class='img-box'>
                                <img class='img-fluid' src='image/$pro_image' style='width: 170px;'>
                            </div> 

                                <small class='text-primary'>$pro_desc</small> 
                                <p class='mb-0'>&#8369;$pro_money</p>                                        
                                <div class='mb-3'>
                                    <small>available:</small><small class='text-success'> 7 stocks</small>                                        
                                </div>
                                <div class='row mx-auto action_btns'>
                                                          
                                    <div class='col-md-4'>

                                        <button class='btn qv_btn rounded-circle' qvid='$pro_id' id='quick_view' data-toggle='modal' data-target='#pop1'>
                                            <i class='bi bi-eye-fill' data-toggle='tooltip' data-placement='top' title='Quick View'></i>
                                        </button>                                     
                                    </div>
                                    <div class='col-md-4'>                                            
                                        <button pid='$pro_id' class='btn ac_btn rounded-circle'' id='product' data-toggle='tooltip' data-placement='top' title='Add to cart'>
                                            <i class='bi bi-bag '></i>
                                        </button>
                                    </div>
                                    <div class='col-md-4'>                                       
                                        <button class='btn aw_btn rounded-circle'' id='heart' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
                                            <i class='bi bi-suit-heart-fill '></i>
                                        </button>
                                    </div>                                            
                                </div>
                                <div class='back-drop'></div>
                                
                        </div>
                                </div>
                            ";  
                        }
                    }
           ?>
        </div>

    </div>
    </div>

    <!--- Offers of the week -->
    <div class="container-fluid-offers">
        <div class="row welcome text-center">
            <div class="col-12">
                <h4 class="">Offers of the week</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row padding">
            <div class="col-md-4 off1">
                <p class="textDisc">30% DISCOUNT</p>
                <!-- <img class="discount" src="img/discount.png" alt="discount"> -->
                <img class="card-img-top picfrmOffer" src="img/e.png">
                <div class="card-body">
                    <h4 class="card-title">Wooden Cultured Table</h4>
                    <p class="card-text"> Mostly cozy style living in classics </p>
                    <a href="#" class="btn btn-outline-primary">See Offers</a>
                </div>
            </div>

            <div class="col-md-4 off2">
                <p class="textDisc2">50% DISCOUNT</p>
                <img class="card-img-top picfrmOffer2" src="img/b.png">
                <div class="card-body">
                    <h4 class="card-title">Sofa Bed Queen Bee</h4>
                    <p class="card-text">Modern design for vivid lifestyle</p>
                    <a href="#" class="btn btn-outline-primary">See Offers</a>
                </div>
            </div>

            <div class="col-md-4 off3">
                <p class="textDisc3">45% DISCOUNT</p>
                <img class="card-img-top picfrmOffer3" src="img/c.png">
                <div class="card-body">
                    <h4 class="card-title">Sofa King Gray</h4>
                    <p class="card-text">Futuristic design for delicate lifestyle</p>
                    <a href="#" class="btn btn-outline-primary">See Offers</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Offers of the week -->

    <!-- Brand Slider -->
    <!-- <h4 class="text-center">Our Own Brands</h4>
  <div class="container-fluid-brandSlider">
    <div class="main-carousel" data-flickity='{ "wrapAround": "left", "contain": true, "autoPlay": 2500 }'>
      <div class="carousel-cell3">
        <img src="jandclogos/1.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/2.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/3.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/4.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/5.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/6.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/7.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/8.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/9.png" class="img-set3">
      </div>
      <div class="carousel-cell3">
        <img src="jandclogos/10.png" class="img-set3">
      </div>
    </div>
  </div> -->
    <h4 class="text-center">Our own Brands</h4>
    <div class="swiper-containerX">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="jandclogos/a.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/b.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/c.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/d.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/e.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/f.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/g.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/h.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
            <div class="swiper-slide"><img src="jandclogos/i.png"
                    style="width: 250px; height: 200px; margin-left: 100px;" alt=""></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!--- Connect -->
    <div class="container-fluid-7 padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h4>Connect with us</h4>
            </div>
            <div class="col-12 social padding">
                <a href="https://www.facebook.com/JohnAndCarlBuildersDepot"><i class="fab fa-facebook"></i></a>
                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
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
                    <h5 class="h51">Navigate</h5>
                    <ul>
                        <li><a href="storelocations">Store Locations</a></li>
                        <li><a href="careers">Careers</a></li>
                    </ul>
                    <br>
                    <h5 class="h52">Customer Support</h5>
                    <ul>
                        <li><a href="contactus">Contact Us</a></li>
                        <li><a href="contactus">Terms & Conditions</a></li>
                        <li><a href="contactus">FAQ's</a></li>
                    </ul>
                </div>

                <div class="aboutUs col-md-3">
                    <h5 class="h52">Promotions</h5>
                    <ul>
                        <li><a href="contactus">On Sale</a></li>
                        <li><a href="contactus">Vouchers</a></li>
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

    <!-- Button for scroll top -------------------------------------------------->
    <button id="btnUp">
        <i class="fas fa-chevron-circle-up"></i>
    </button>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Script for real time date & time clock -------------------------------------------->
    <!-- <script type="text/javascript" src="js/clock.js"></script> -->

    <script src="js/all.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Script Button scroll top ------------------------------------------------------>
    <script>
    const btnUp = document.querySelector("#btnUp");

    btnUp.addEventListener("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });


    // Slider 1
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 100,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Slider 2
    var swiper = new Swiper('.swiper-containerX', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 3,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    </script>

</body>

</html>